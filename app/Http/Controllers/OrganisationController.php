<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests; 
use App\User;
use App\InspectionRequest;
use App\Organisation;
use Spatie\Permission\Models\Role;
use Hash;
use Illuminate\Support\Facades\Auth;
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
						'requester' => 'required',
						'requester_email' => 'required',
					]);

				
				$data =  $request->only(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email']);
				
				$type = 'Vehicle Inspection';
				if($request->type == '1'){
					$details = $request->except(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email','property_description','property_specification']);
				}
				else{
					$type = 'Property Inspection';
					$details = $request->only(['property_description','property_specification']);
				}


				unset($details['_token']);

				$data['details'] = $details;
				$data['organisation_id'] = Auth::user()->id;
				
				//return  var_dump($request->all());
				$request = InspectionRequest::create($data);
				$organisation = Auth::user();
				
				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('Hello '.$organisation->name.', You just Placed a new request');

					$message->to($organisation->email);
                   
				});


				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
                    $message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
                    $message->subject('New Inspection Request from '.$organisation->name);
					$message->to('oladele.akinsanya@ojasquare.org');
                   
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
						'requester' => 'required',
						'requester_email' => 'required',
				]);

						
				$data =  $request->only(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email']);
				
				$type = 'Vehicle Inspection';
				if($request->type == '1'){
					$details = $request->except(['type','agreed_inspection_date','agreed_inspection_time','contact_person','contact_phone','requester','requester_email','property_description','property_specification']);
				}
				else{
					$type = 'Property Inspection';
					$details = $request->only(['property_description','property_specification']);
				}


				

				if(Auth::user()->isOrganisation()){

					if(Auth::user()->id != $inspectionRquest->organisation_id){
						return 'You are not allowed to modify this request.';
					}

				}
				
				unset($details['_token']);

				$data['details'] = $details;
				$inspectionRquest->update($data);

				$organisation = User::find($inspectionRquest->organisation_id);
				 
				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
					$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
					$message->subject('Hello '.$organisation->name.', You just updated a request');

					$message->to($organisation->email);
					
				});


				Mail::send(['html' => 'emails.new-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$data ),function($message) use($organisation){
					$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
					$message->subject('Inspection Request for '.$organisation->name);
					$message->to('oladele.akinsanya@ojasquare.org');
					
				});
				
				if(Auth::user()->isOrganisation()){

					return redirect('requests/all')->with('success','Request updated Successfully');
				}
					return redirect('admin/requests')->with('success','Request updated Successfully');
				
			}

			 
			return view('organisations.editRequest',['request'=>$inspectionRquest]);

	}

	public function requests() {
		$requests = InspectionRequest::where('organisation_id',Auth::user()->id)->orderBy('created_at','Desc')->get();
    	return view('organisations.requests',['requests'=>$requests]);
   	}


	public function updateStatus($id)
	{
		$request = InspectionRequest::find($id);
		$organisation = User::find($request->organisation_id);
		$type = 'Vehicle Inspection';
		if($request->type == '2'){
			$type = 'Property Inspection';
		}

		$request->update(['status'=>'completed']);
		Mail::send(['html' => 'emails.completed-request'], array('organisation' =>$organisation->name,'type' => $type,'details'=>$request ),function($message) use($organisation){
				$message->from('no-reply@verifycustomerinfo.com', 'Verify Customer Info');
				$message->subject('Your request has been completed');

				$message->to($organisation->email);
                   
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

			 $request = InspectionRequest::find($id);
			 
			 if($request->organisation_id == Auth::user()->id) {
				 $request->delete();
			 }
			return redirect('requests/all')->with('success','Request deleted Successfully');
		}
		if(Auth::user()->isAdmin()){

			InspectionRequest::find($id)->delete();	
			return redirect('admin/requests')->with('success','Request deleted Successfully');
		}
        
	}

	


}
?>