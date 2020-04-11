<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Organisation;
use App\InspectionRequest;
use App\Report;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use App\Exports\RequestExport;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function organisations(Request $request)
    {
        $organisations = Organisation::all();
        return view('organisations',compact('organisations'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requests(Request $request)
    {
        $organisations = Organisation::all();
        $requests = InspectionRequest::orderBy('created_at','Desc')->get();
        return view('requests',compact('requests','organisations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name','!=','Employee')->pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('user_has_roles')->where('user_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }

    public function getallusers()
    {
        $users = User::all();
        return view('users/alluser',['users'=>$users]);
    }


    public function addReport(Request $request)
    {

        
        if ($request->isMethod('post')) {

            
            $this->validate($request, [
						'request_id' => 'required',
						'inspection_date' => 'required',
						'inspection_time' => 'required',
						'owner' => 'required',
						'contact_phone' => 'required',
						'address' => 'required',
                        'email' => 'required',
                        'color' => 'required',
                        'chasis_number' => 'required',
                        'engine_number' => 'required',
                        'odometer_reading' => 'required',
                        'inspection_result' => 'required',
                        'inspected_by' => 'required',
                        'signature' => 'required',
					]);

				
				$data =  $request->all();
                
                $data['body_integrity']['Full Left Side'] = $data['body_integrity']['Full Left Side']->store('Full Left Side');
                $data['body_integrity']['Full Right Side'] = $data['body_integrity']['Full Right Side']->store('Full Right Side');
                $data['body_integrity']['Back with License Plate'] = $data['body_integrity']['Back with License Plate']->store('Back with License Plate');
                $data['body_integrity']['Front with License Plate'] = $data['body_integrity']['Front with License Plate']->store('Front with License Plate');
                $data['body_integrity']['Interior Front'] = $data['body_integrity']['Interior Front']->store('Interior Front');
                $data['body_integrity']['Interior Back'] = $data['body_integrity']['Interior Back']->store('Interior Back');
                $data['body_integrity']['Chasis'] = $data['body_integrity']['Chasis']->store('Chasis');
                $data['body_integrity']['Trunk'] = $data['body_integrity']['Trunk']->store('Trunk');
                $data['body_integrity']['Spare Tyre'] = $data['body_integrity']['Spare Tyre']->store('Spare Tyre');

                $data['vehicle_information']['Vehicle Papers'] = $data['vehicle_information']['Vehicle Papers']->store('Vehicle Papers');
                $data['vehicle_information']['Purchase Receipt'] = $data['vehicle_information']['Purchase Receipt']->store('Purchase Receipt');

                $data['signature'] = $data['signature']->store('signatures');

                $report = Report::create($data);
                return redirect()->route('add-report')
                        ->with('success','Report Added successfully');

        }

        $requests = InspectionRequest::where('status','Accepted')->get();

        return view('addReport',compact('requests'));
    }



    public function uploadReport(Request $request)
    {

        if ($request->isMethod('post')) {
            $this->validate($request, [
                            'request_id' => 'required',
                            'report_file' => 'required|file',
                        ]);

            $data =  $request->all();

            $data['report_file'] = $data['report_file']->store('reports');

            $data['is_file'] = true;

            $report = Report::create($data);

            return redirect()->route('add-report-file')
                            ->with('success','Report Added successfully');
        }

        $requests = InspectionRequest::where('status','Accepted')->get();

        return view('add-report-file',compact('requests'));

    }

    public function requests_report(Request $request)
    {
       
        $type = $request->type;
        $organisation = $request->organisation;
        
        return (new RequestExport($type,$organisation))->download('invoices.xlsx');
    }



}