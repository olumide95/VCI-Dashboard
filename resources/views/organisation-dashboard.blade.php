
@extends('layouts.base')

@section('home_active', 'active')

@section('content')


            
            <div class="page-wrapper">

    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="content container-fluid">
                    <div class="row">
                         
                       
<div class="col-md-6 col-sm-6 col-lg-6">
                            
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{$pending_request}}</h3>
                                    <span>Pending Request(s)</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3>{{$completed_request}}</h3>
                                    <span>Completed Request(s)</span>
                                </div>
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
