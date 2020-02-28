

<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="@yield('organisation-dashboard_active')"> 
								<a href="{{route ('organisation-dashboard')}}"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							
							<li class="submenu ">
								<a href="#" class="noti-dot"><i class="la la-user"></i> <span>Requests</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="@yield('requests_active')" href="{{route('requests')}}">All Requests</a></li>
									<li><a class="@yield('add-request_active')" href="{{route('add-request')}}">New Request</a></li>
								</ul>
							</li>


							<li class="@yield('requesters_active')"> 
								<a href="{{route ('requesters')}}"><i class="la la-user"></i> <span>Requesters</span></a>
							</li>
							
						</ul>
					</div>
                </div>
 </div> 