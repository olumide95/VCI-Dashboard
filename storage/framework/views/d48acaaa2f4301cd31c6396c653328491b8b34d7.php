<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
        <link rel="shortcut icon" type="image/x-icon" href="/img/ariosh_fav.ico">
        <title>Ariosh <?php echo $__env->yieldContent('title'); ?></title>
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
		<?php echo Charts::assets(); ?>

    </head>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
					<?php if(!Auth::user()->isEmployee()): ?>
                    <a href="<?php echo e(route ('home')); ?>" class="logo">
					<?php else: ?>
					<a href="<?php echo e(url ('profile')); ?>" class="logo">
					<?php endif; ?>
						<img src="/img/a.png" width="40" height="40" alt="">
					</a>
                </div>
				<a id="toggle_btn" href="javascript:void(0);"><i class="la la-bars"></i></a>
                <div class="page-title-box pull-left">
					<h3>Ariosh </h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<!-- <li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge ariosh-blue pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="#">
											<div class="media-left">
												<span class="avatar">E</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Emmanuella</span> created a task name <span class="noti-title">Contract Update</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li> -->
					<li class="dropdown">
						<a href="" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
							<span class="user-img"><img class="img-circle" src="/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
							<span><?php echo e(Auth::user()->name); ?></span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
						</ul>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
					</ul>
				</div>
            </div>
			<?php echo $__env->renderWhen(Auth::user()->isHr(),'sidebar.hr', array_except(get_defined_vars(), array('__data', '__path'))); ?>
			<?php echo $__env->renderWhen(Auth::user()->isAdmin(),'sidebar.admin', array_except(get_defined_vars(), array('__data', '__path'))); ?>
			<?php echo $__env->renderWhen(Auth::user()->isEmployee(),'sidebar.employee', array_except(get_defined_vars(), array('__data', '__path'))); ?>
            <?php echo $__env->yieldContent('content'); ?>
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
        <!-- <script type="text/javascript" src="/js/chart.js"></script> -->
        <!-- <script type="text/javascript" src="/plugins/morris/morris.min.js"></script>
		<script type="text/javascript" src="/plugins/raphael/raphael-min.js"></script> -->

		<?php echo $__env->yieldContent('page_scripts'); ?>
    </body>

</html>