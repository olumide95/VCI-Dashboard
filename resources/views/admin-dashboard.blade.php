
@extends('layouts.base')

@section('admin-dashboard_active', 'active')

@section('content')


            
            <div class="page-wrapper">

    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="content container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $users }}</h3>
                                    <span><a class="ariosh-blue-text" href="#"><strong> Users</strong></a></span><br><br>
                                        </div>
                            </div>
                        </div>
                       
<div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-building" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{$admins}} </h3>
                                    <span> Admins </span>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-money" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{ $organisations }}</h3>
                                    <span>Organisations</span>
                                     <h5><span class="text-danger">Requesters - ({{ $requesters }}) </span>  </h5>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{$pending_request}}</h3>
                                    <span>Pending Request(s)</span>
                                     <h5></h5>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{$completed_request}}</h3>
                                    <span>Completed Request(s)</span>
                                    <h5></h5>
                                </div>
                            </div>
                        </div> 

                    
                        
                    </div>

                 
                            </div>
                        </div>
                    </div>

                    
                </div>      
            </div>

@endsection


@section('page_scripts')


@endsection
