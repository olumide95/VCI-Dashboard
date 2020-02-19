<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <link rel="shortcut icon" type="image/x-icon" href="/img/ariosh_fav.ico">
        <title>Verify Customer Info @yield('title')</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/line-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/select2.min.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/fullcalendar.min.css">
        <link rel="stylesheet" type="text/css" href="/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="/plugins/summernote/dist/summernote.css">
        <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
		<link href="/css/toastr.min.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
					@if(!Auth::user()->isOrganisation())
                    <a href="{{url ('/admin')}}" class="logo">
					@else
					<a href="{{url ('/')}}" class="logo">
					@endif
						<!--<img src="/img/a.png" width="40" height="40" alt="">-->
					</a>
                </div>
				<a id="toggle_btn" href="javascript:void(0);"><i class="la la-bars"></i></a>
                <div class="page-title-box pull-left">
					<h3> </h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					
					<li class="dropdown">
						<a href="" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span>{{Auth::user()->name}}</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            </li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                            </form>
                        </li>
					</ul>
				</div>
            </div>
			@includeWhen(Auth::user()->isAdmin(),'sidebar.admin')
			@includeWhen(Auth::user()->isOrganisation(),'sidebar.organisation')
            @yield('content')
        </div>
		
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="/js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="/js/select2.min.js"></script>
		<script type="text/javascript" src="/js/moment.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="/js/app.js"></script>
		<script type="text/javascript" src="/js/fullcalendar.min.js"></script>
        <script type="text/javascript" src="/js/jquery.fullcalendar.js"></script>
        <script type="text/javascript" src="/js/task.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.6/tinymce.min.js"></script>
        <script src="/js/toastr.min.js"></script>

		@yield('page_scripts')

		<script>
		@if(Session::has('success'))
   
	
	toastr.info('{{Session::get('success')}}')

   @endif
		</script>
    </body>

</html>