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
        
        return (new RequestExport($type,$organisation))->download('requests.xlsx');
    }



}