

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="@yield('admin-dashboard_active')"> 
								<a href="{{route ('admin-dashboard')}}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>


							<li class="@yield('users_active')"> 
								<a href="{{route ('users.index')}}"><i class="la la-dashboard"></i> <span>Users</span></a>
							</li>


							<li class="@yield('organisations-requests_active')"> 
								<a href="{{route ('organisations-requests')}}"><i class="la la-dashboard"></i> <span>Requests</span></a>
							</li>

							<li class="@yield('add-report_active')"> 
								<a href="{{route ('add-report')}}"><i class="la la-dashboard"></i> <span>Add Report</span></a>
							</li>

							<li class="@yield('add-report-file_active')"> 
								<a href="{{route ('add-report-file')}}"><i class="la la-dashboard"></i> <span>Add Report (File Upload)</span></a>
							</li>
			
						</ul>
					</div>
                </div>
            </div>


