
@extends('users.users')

@section('title', '| Users')

@section('alluser_active', 'active')

@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Users</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="{{url ('admin/users/create')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add User</a>
							
						</div>
					</div>
                           
                        
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Email</th>
											<th>Created Date</th>
											<th>Role</th>
										  <th class="text-right">Action</th>  
										</tr>
									</thead>
									<tbody>
										@foreach($users as $user)
										<tr>
											<td>
												<a href="#" class="avatar">{{$user->name[0]}}</a>
												<h2><a href="#">{{$user->name}} </a></h2>
											</td>
											<td>{{$user->email}}</td>
										 
											<td>{{$user->created_at}}</td>
											<td>
												<span class="label label-danger-border">{{$user->roles[0]->name}}</span>
											</td>

											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li>
													<a  href="{{route('users.edit',$user->id)}}"><i class="fa fa-pencil m-r-5"></i> Update</a>
													<a  href="{{route('users.destroy',$user->id)}}" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="fa fa-pencil m-r-5"></i> Delete</a>
                                                    <form id="delete-form" action="{{route('users.destroy',$user->id)}}" method="POST" style="display: none;">
															 {{ method_field('DELETE') }}
																{{ csrf_field() }}
													</form>
													</li>
														
													</ul>
												</div>
											</td>
											
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				
            </div>

  
                                

@endsection


@section('page_scripts')

<script>
	$(document).ready( function () {
    $('#example').DataTable();
	});
        
</script> 



@endsection