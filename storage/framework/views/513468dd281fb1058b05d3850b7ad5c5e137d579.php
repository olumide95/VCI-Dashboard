

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="<?php echo $__env->yieldContent('organisation-dashboard_active'); ?>"> 
								<a href="<?php echo e(route ('organisation-dashboard')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							
							<li class="submenu ">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Requests</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo $__env->yieldContent('requests_active'); ?>" href="<?php echo e(route('requests')); ?>">All Requests</a></li>
									<li><a class="<?php echo $__env->yieldContent('add-request_active'); ?>" href="<?php echo e(route('add-request')); ?>">New Request</a></li>
								</ul>
							</li>
							
						</ul>
					</div>
                </div>
 </div> 