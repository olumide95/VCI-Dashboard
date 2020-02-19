

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="<?php echo $__env->yieldContent('home_active'); ?>"> 
								<a href="<?php echo e(route ('home')); ?>"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							
							
							

							<li class="submenu ">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Users</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="<?php echo $__env->yieldContent('alluser_active'); ?>"> 
								<a  href="<?php echo e(route('users.index')); ?>"><i class="la la-users"></i> <span>All Users</span></a>
							</li>
									
									<li class="<?php echo $__env->yieldContent('addUser_active'); ?>"><a  href="<?php echo e(route('users.create')); ?>"> <i class="la la-user-plus"></i> Add User</a></li>
								</ul>
							</li>


								<li class="submenu ">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Employees</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo $__env->yieldContent('allEmployees_active'); ?>" href="<?php echo e(route('allEmployees')); ?>">All Employees</a></li>
									<li><a class="<?php echo $__env->yieldContent('contractStaffs_active'); ?>" href="<?php echo e(route('contractStaffs')); ?>">Contract Staffs</a></li>
									<li><a class="<?php echo $__env->yieldContent('fullTimeStaffs_active'); ?>" href="<?php echo e(route('fullTimeStaffs')); ?>">Fulltime Staffs</a></li>
									<li><a class="<?php echo $__env->yieldContent('interns_active'); ?>" href="<?php echo e(route('interns')); ?>">Interns <!-- <span class="badge bg-primary pull-right">1</span> --></a></li>
									<li><a class="<?php echo $__env->yieldContent('mpn_active'); ?>" href="<?php echo e(route('mpn')); ?>">MPN </a></li>
									<li><a class="<?php echo $__env->yieldContent('spdc_active'); ?>" href="<?php echo e(route('spdc')); ?>">SPDC </a></li>
									<li><a class="<?php echo $__env->yieldContent('chevron_active'); ?>" href="<?php echo e(route('chevron')); ?>">Chevron </a></li>
									<li><a class="<?php echo $__env->yieldContent('addEmployee_active'); ?>" href="<?php echo e(route('addEmployee')); ?>">Add Employees</a></li>
								</ul>
							</li>
							<li class="submenu"> 
								<a href="#"><i class="la la-users"></i> <span>Applicants Database</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo $__env->yieldContent('allApplicants_active'); ?>" href="<?php echo e(route ('allApplicants')); ?>"> All Applicants </a></li>
									<li><a class="<?php echo $__env->yieldContent('addApplicant_active'); ?>" href="<?php echo e(route ('addApplicant')); ?>"> Add Applicant </a></li>
								</ul>
							</li>
							<li class="<?php echo $__env->yieldContent('departments_active'); ?>">
								<a href="<?php echo e(route ('departments')); ?>"><i class="la la-building"></i> <span> Departments</span> </span></a>
							</li>
							
							<li class="submenu"> 
								<a href="#"><i class="la la-calendar"></i> <span>Leave Tracker</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo $__env->yieldContent('leave_active'); ?>" href="<?php echo e(route ('leave')); ?>"> <span>All Leave</span></a></li>
									<li><a class="<?php echo $__env->yieldContent('add-leave_active'); ?>"  href="<?php echo e(route ('add-leave')); ?>"> Add Leave</a></li>
									
								</ul>
							</li>
							
							<li> 
								<a href="#"><i class="la la-columns"></i> <span>Attendance Tracker</span></a>
							</li>
							
				

							<li class="submenu"> 
								<a href="#"><i class="la la-calendar"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php echo $__env->yieldContent('resigned_active'); ?>" href="<?php echo e(route('resigned')); ?>"> <span>Disengaged/Resigned</span></a></li>
									

								</ul>
							</li>


							
						</ul>
					</div>
                </div>
            </div>


