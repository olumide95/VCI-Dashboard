@extends ('employees.employees')

@section('title', '| Profile')

@section('allEmployees_active', 'active')


@section('content') 

<div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">{{$employee->firstname}}'s Profile</h4>
						</div>
						
						

						
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img class="avatar" src="/passport/{{$employee->image}}" alt=""></a>
										</div>
									</div>
									
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-offset-1 col-md-4">
												<div class="profile-info">
													<h3 class="employee-name m-t-0 m-b-0">{{$employee->firstname}}&nbsp{{$employee->lastname}}</h3>
													<small class="text-muted">{{$employee->position}}</small><br><br>
													<div class="staff-id">Employee ID : <strong>{{$employee->employee_number}}</strong></div><br>
													<div class="staff-id">Date of Employment : <strong>{{$employee->date_of_resumption}}</strong></div><br>
													<div class="staff-id">Employment Type : <strong>{{$employee->employment_type}}</strong></div><br>
													<div class="staff-id">Department : <strong>{{$employee->department->department_name}}</strong></div><br>
													<div class="staff-id">Supervisor : <strong>{{ $employee->department->department_lead }}</strong></div><br>
													@if(Auth::user()->isHr())
													<div class="staff-msg"><a href="https://outlook.office.com/owa/?path=/mail/action/compose&to={{$employee->email}}" target="blank" class="btn btn-custom">Send Message</a></div>
													@endif
												<div class="staff-msg"><a  class="btn btn-custom"  data-toggle="modal"  data-target="#edit_employee" href="#"><i class="fa fa-pencil m-r-5"></i> Update Profile</a></div>
											
												
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info add-dash-border">

													<li>
														<span class="title text-right">Gender:</span>
														<span class="text">{{$employee->gender}}</span>
													</li><br>

													<li>
														<span class="title text-right">Birthday:</span>
														<span class="text">{{$employee->date_of_birth}}</span>
													</li><br>

													<li>
														<span class="title text-right">Marital Status:</span>
														<span class="text">{{$employee->marital_status}}</span>
													</li><br>

													<li>
														<span class="title text-right">Phone:</span>
														<span class="text">{{$employee->mobile_number}}</span>
													</li><br>
													<li>
														<span class="title text-right">Email:</span>
														<span class="text"><a href="mailto:{{$employee->email}}" target="_blank">{{$employee->email}}</a></span>
													</li><br>

													<li>
														<span class="title text-right">Address:</span>
														<span class="text">{{$employee->address}}</span>
													</li><br>

													<li>
														<span class="title text-right">Next of Kin Name:</span>
														<span class="text">{{$employee->next_of_kin_name}}</span>
													</li><br>
													<li>
														<span class="title text-right">Next of Relationship:</span>
														<span class="text">{{$employee->next_of_kin_relationship}}</span>
													</li><br>
													<li>
														<span class="title text-right">Next of Kin Phone Number:</span>
														<span class="text">{{$employee->next_of_kin_phone_number}}</span>
													</li><br>
													
													<li>
														<span class="title text-right">Work Location:</span>
														<span class="text">{{$employee->work_location}}</span>
													</li><br>

													<li>
														<span class="title text-right">Resume:</span>
														<span class="text"><a taget="_blank" href="/uploads/{{$employee->document}}" target="blank" class="btn btn-xs btn-info">View Resume</a></span>
													</li><br>

													
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					
					<div class="row">
						<div class="col-md-6">
							<div class="card-box">
								<h3 class="card-title">Leave Eligibility</h3>
								
									<table class="table table-striped custom-table m-b-0">
										<thead>
											<tr>
												<th>Leave Type</th>
												<th>No of Days </th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>All Leave</td>
												<td>{{$employee->leave_eligibility}}</td>
											</tr>
											
										</tbody>
									</table>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card-box">
								<h3 class="card-title">Leave Report</h3>
								
									<table class="table table-striped custom-table m-b-0">
										<thead>
											<tr>
												<th>Leave Type</th>
												<th>No of Days </th>
												<th>Outstanding</th>
											</tr>
										</thead>
										@if (is_null($leavereport))

										<p class="text-success">...no report available... </p>	
										@else	
										
													   
										<tbody>
											<tr>
												<td>{{$leavereport->leave_type}}</td>
												<td>{{$leavereport->days}}</td>
												<td>{{$employee->leave_eligibility - $leavereport->days}}</td>	
											</tr>
										</tbody>
										
										@endif
									
									</table>
							</div>
						</div>	
					</div>

				</div>
			</div>

                <div id="edit_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Employee </h4>
						</div>
						<div class="modal-body">
							@if(Auth::user()->isHr())
							<form class="m-b-30" action="/update/{{$employee->employee_number}}" method="POST" enctype="multipart/form-data" role="form" >
							@elseif(Auth::user()->isEmployee())

								<form class="m-b-30" action="/profile/update/{{$employee->employee_number}}" method="POST" enctype="multipart/form-data" role="form" >
							
							@endif
							{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="firstname" value="{{ $employee-> firstname }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" type="text" name="lastname" value="{{ $employee-> lastname }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="employee_number" value="{{ $employee-> employee_number }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Gender</label>
											<select class="form-control" type="text" name="gender">
												<option value="{{ $employee-> gender }}">{{ $employee-> gender }}</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Date of Birth <span class="text-danger">*</span></label>
											<input class="form-control" type="date" value="{{ $employee-> date_of_birth }}" name="date_of_birth">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Marital Status</label>
											<select class="form-control" type="text" name="marital_status">
												<option value="{{ $employee-> marital_status }}">{{ $employee-> marital_status }}</option>
												<option value="Married">Married</option>
												<option value="Single">Single</option>
											</select>

										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone Number</label>
											<input class="form-control" type="tel" value="{{ $employee-> mobile_number }}" name="mobile_number">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email" name="email" value="{{ $employee-> email }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Address </label>
											<input class="form-control" type="text" value="{{ $employee-> address }}" name="address">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Next of Kin name </label>
											<input class="form-control" value="{{ $employee-> next_of_kin_name }}" type="text" name="next_of_kin_name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Next of Kin Relationship </label>
											<input class="form-control" value="{{ $employee-> next_of_kin_relationship }}" type="text" name="next_of_kin_relationship">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Next of Kin Phone Number </label>
											<input class="form-control" type="tel" value="{{ $employee-> next_of_kin_phone_number }}" name="next_of_kin_phone_number">
										</div>
									</div>
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Department <span class="text-danger">*</span></label>
											<select type="text" class="form-control" name="department_id">
												<option value="">select department</option>
												@foreach(\App\Department::get() as $department)

												<option value="{{$department->id}}" {{$employee->department_id == $department->id ? 'selected': ''}} >{{$department->department_name}}</option>

												@endforeach
												
											</select>
											
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation </label>
											<input class="form-control" type="text" value="{{ $employee-> position }}" name="position">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employment Type </label>
											<select type="text" class="form-control"  name="employment_type" onchange='ask(this.value);'>
												<option value="{{ $employee-> employment_type }}">{{ $employee-> employment_type }}</option>
												<option value="Contract">Contract</option>
												<option value="Fulltime">Fulltime</option>
												<option value="Intern">Intern</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6" style="display:none;" id="contract_months">  
										<div class="form-group">
											<label class="control-label">Contract Month(s) <span class="text-danger">*</span></label>
											<input class="form-control" type="number" value="{{ $employee-> contract_month }}" name="contract_month" >
										</div>
									</div>
									
									<div class="col-sm-6">  
										<div class="form-group">
											<label class="control-label">Date of Employment <span class="text-danger">*</span></label>
											<input class="form-control" type="date" name="date_of_resumption" value="{{ $employee-> date_of_resumption }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employment Status </label>
											<select type="text" class="form-control" name="employment_status">
												<option value="{{ $employee-> employment_status }}">{{ $employee-> employment_status }}</option>
												<option value="active">Active</option>
												<option value="Inactive">Inactive</option>
											</select>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Work Location </label>
											<input class="form-control" type="text" value="{{ $employee-> work_location }}" name="work_location">

										</div>
									</div>
									<div class="col-sm-6" >  
										<div class="form-group">
											<label class="control-label">Leave Eligibility <span class="text-danger">*</span></label><br>
											<input type="checkbox" class="sum" value="5" > Casual Leave &nbsp &nbsp
											<input type="checkbox" class="sum" value="5" > Sick Leave &nbsp &nbsp
											<input type="checkbox" class="sum" value="5" > Compassionate Leave &nbsp &nbsp
											<input type="checkbox" class="sum" value="5" > Exam Leave &nbsp &nbsp
											<input type="checkbox" class="sum" value="20" > Maternity Leave &nbsp &nbsp
											<!-- <input type="checkbox" class="sum" value="25" onclick="checkAll('checked');"> All -->

											<input class="form-control" name="leave_eligibility" id="leave_eligibility" value="0" type="hidden">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label class="control-label">Upload passport <span class="text-danger">(.jpg file)</span></label>
											<input type="file" name="image" id="image" >
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											<label class="control-label">Add Credentials <span class="text-danger">(.pdf format)</span> </label>
											<input type="file" name="document" id="document">
										</div>
									</div>
								</div>

								<div class="m-t-20 text-center">
									<button class="btn btn-primary" type="submit">Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

@endsection



@section('page_scripts')
<script>
	function ask(val){
	 var element=document.getElementById('contract_months');
	 if(val=='Contract')
	   element.style.display='block';
	 else  
	   element.style.display='none';
	}

	 var inputs = document.getElementsByClassName('sum'),
     total = document.getElementById('leave_eligibility');

	 for (var i = 0; i < inputs.length; i++) {
	     inputs[i].onchange = function () {
	         var add = parseInt(this.value) * (this.checked ? 1 : -1);
	         total.value = parseFloat(total.value) + add
	     }
	 }

</script>



@endsection