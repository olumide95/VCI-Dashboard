<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests; 
use App\Requester;
use App\Report;
use App\User;
use App\InspectionRequest;
use App\Organisation;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Facades\Auth;
use Storage;
class OrganisationController extends Controller
{
    public function addRequest(Request $request)
    {
		 if ($request->isMethod('post')) {
				$this->validate($request, [
						'type' => 'required',
						'agreed_inspection_date' => 'required',
						'agreed_inspection_time' => 'required',
						'contact_person' => 'required',
						'contact_phone' => 'required',
						'owner_name' => 'required',
						'owner_phone' => 'required',
						'requester' => 'required',
						'requester_email' => 'required',
					]);

				
				$data =  $request->only(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','owner_name','owner_phone','requester','requester_email']);
				
				$type = 'Vehicle Inspection';
				if($request->type == '1'){
					$details = $request->except(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','owner_name','owner_phone','requester','requester_email','property_description','property_specification']);
				}
				else{
					$type = 'Property Inspection';
					$details = $request->only(['property_description','property_specification']);
				}


				unset($details['_token']);

				$data['details'] = $details;

				if(Auth::user()->isOrganisation()){

					$data['organisation_id'] = Auth::user()->id;

				}
				else if(Auth::user()->isRequester()){
					$data['organisation_id'] = Auth::user()->requester->organisation->user_id;
				}
				
				
				//return  var_dump($request->all());
				$request = InspectionRequest::create($data);
				$organisation = Auth::user();
				
				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('Hello '.$organisation->name.', You just Placed a new request');

					$message->to($organisation->email);
                   
				});

				 
				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($request){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('Hello '.$request->requester.', Your request has been sent');

					$message->to($request->requester_email);
                   
				});


				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('New Inspection Request from '.$organisation->name);
					$message->to('info@verifycustomerinfo.com');
                   
				}); 
				

				return redirect('/requests/all')->with('success','Request submitted Successfully');

			}

			return view('organisations.addRequest');

	}



	public function updateRequest(Request $request,$id)
	{
		$inspectionRquest = InspectionRequest::find($id);
		if ($request->isMethod('post')) {
				

				$this->validate($request, [
						'type' => 'required',
						'agreed_inspection_date' => 'required',
						'agreed_inspection_time' => 'required',
						'contact_person' => 'required',
						'contact_phone' => 'required',
						'owner_name' => 'required',
						'owner_phone' => 'required',
						'requester' => 'required',
						'requester_email' => 'required',
				]);

						
				$data =  $request->only(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','owner_name','owner_phone','requester','requester_email']);
				
				$type = 'Vehicle Inspection';
				if($request->type == '1'){
					$details = $request->except(['type','agreed_inspection_date','agreed_inspection_time','owner_name','owner_phone','contact_person','contact_phone','requester','requester_email','property_description','property_specification']);
				}
				else{
					$type = 'Property Inspection';
					$details = $request->only(['property_description','property_specification']);
				}


				
				if(Auth::user()->isOrganisation()){

					$organisation_id = Auth::user()->id;

				}
				else if(Auth::user()->isRequester()){
					$organisation_id = Auth::user()->requester->organisation->user_id;
				}

				if(Auth::user()->isOrganisation() || Auth::user()->isRequester()){

					if($organisation_id != $inspectionRquest->organisation_id){
						return 'You are not allowed to modify this request.';
					}

				}
				
				unset($details['_token']);

				$data['details'] = $details;
				$inspectionRquest->update($data);

				$organisation = User::find($inspectionRquest->organisation_id);
				 
				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
					$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
					$message->subject('Hello '.$organisation->name.', Your request has been updated');

					$message->to($organisation->email);
					
				});

				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($inspectionRquest){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('Hello '.$inspectionRquest->requester.', Your request has been updated');

					$message->to($inspectionRquest->requester_email);
                   
				});


				 Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
					$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
					$message->subject('Inspection Request for '.$organisation->name);
					$message->to('info@verifycustomerinfo.com');
					
				});  
				
				if(Auth::user()->isOrganisation() || Auth::user()->isRequester()){

					return redirect('requests/all')->with('success','Request updated Successfully');
				}
					return redirect('admin/requests')->with('success','Request updated Successfully');
				
			}

			 
			return view('organisations.editRequest',['request'=>$inspectionRquest]);

	}

	public function requests() {

		if(Auth::user()->isRequester()){

           $id = Auth::user()->requester->organisation->user_id;
        }
        else{

            $id = Auth::user()->id;
        }
		$requests = InspectionRequest::where('organisation_id',$id)->orderBy('created_at','Desc')->get();
    	return view('organisations.requests',['requests'=>$requests]);
	}
	   

	public function requesters()
	{
		
		$requesters = Requester::where('organisation_id',Auth::user()->id)->with('user')->orderBy('created_at','Desc')->get();
		 
		return view('organisations.requesters',['requesters'=>$requesters]);
	
	}


	public function updateStatus($id)
	{
		$request = InspectionRequest::find($id);
		$organisation = User::find($request->organisation_id);
		$type = 'Vehicle Inspection';
		if($request->type == '2'){
			$type = 'Property Inspection';
		}


		if($request->status == 'Accepted'){
			$request->update(['status'=>'Completed']);
		}

		elseif($request->status == 'pending'){

			$request->update(['status'=>'Accepted']);

			Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$request ),function($message) use($request){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('Your request has been '.$request->status);

					$message->to($request->requester_email);
                   
			});
		}

		
		
		$data = [];
		$data['email'] = $organisation->email;
		$data['status'] = $request->status;

		Mail::send(['html' => 'emails.completed-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$request ),function($message) use($data){
				$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
				$message->subject('Your request has been '.$data['status']);

				$message->to($data['email']);
                   
		});

		

		return redirect('admin/requests')->with('success','Status updated Successfully');
	}

	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteRequest($id)
    {
		if(Auth::user()->isOrganisation()){

			$organisation_id = Auth::user()->id;

		}
		else if(Auth::user()->isRequester()){
			$organisation_id = Auth::user()->requester->organisation->user_id;
		}

		if(Auth::user()->isOrganisation() || Auth::user()->isRequester()){

			 $request = InspectionRequest::find($id);
			 
			 if($request->organisation_id == $organisation_id) {
				 $request->delete();
			 }
			return redirect('requests/all')->with('success','Request deleted Successfully');
		}
		if(Auth::user()->isAdmin()){

			InspectionRequest::find($id)->delete();	
			return redirect('admin/requests')->with('success','Request deleted Successfully');
		}
        
	}


	public function view_report (Request $request){
		
		$ins_request = InspectionRequest::find($request->r_id);
		$report = Report::where('request_id',$request->r_id)->latest()->first();

		if($report->is_file){
			return Storage::download($report->report_file);
		}

		if(!isset($report->id)){
			return redirect()->back()->with('error',"Report doesn't exist for this request");
		}
		
		return view('report',compact('report','ins_request'));
	}

	


}
?>