<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\InspectionRequest;
use App\Organisation;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function organisationDashboard()
    {
        if(Auth::user()->isAdmin()){

           return redirect('/admin');
        };
        $id = Auth::user()->id;

        $pending_requests = InspectionRequest::where('organisation_id',$id )->where('status','pending')->get()->count();
        $completed_requests = InspectionRequest::where('organisation_id',$id )->where('status','completed')->get()->count();
         
        return view('organisation-dashboard')->with(['pending_request'=>$pending_requests,'completed_request'=>$completed_requests ]);
   
    }

    public function adminDashboard()
    {

       $pending_requests = InspectionRequest::where('status','pending')->get()->count();
       $completed_requests = InspectionRequest::where('status','completed')->get()->count();
       $users  = User::get()->count();
       $organisations = Organisation::get()->count();
       $admins = $users - $organisations;
       return view('admin-dashboard')->with(['admins'=>$admins,'users'=>$users,'pending_request'=>$pending_requests,'completed_request'=>$completed_requests , 'organisations'=>$organisations]);
   
    }

    
}
