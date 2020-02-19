

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="<?php echo $__env->yieldContent('admin-dashboard_active'); ?>"> 
								<a href="<?php echo e(route ('admin-dashboard')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>


							<li class="<?php echo $__env->yieldContent('users_active'); ?>"> 
								<a href="<?php echo e(route ('users.index')); ?>"><i class="la la-dashboard"></i> <span>Users</span></a>
							</li>


							<li class="<?php echo $__env->yieldContent('organisations-requests_active'); ?>"> 
								<a href="<?php echo e(route ('organisations-requests')); ?>"><i class="la la-dashboard"></i> <span>Requests</span></a>
							</li>
							
							
							

							


							
						</ul>
					</div>
                </div>
            </div>


