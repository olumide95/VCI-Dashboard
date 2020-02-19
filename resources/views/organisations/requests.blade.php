
@extends('organisations.organisations')

@section('title', '| All Requests')

@section('requests_active', 'active')


@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">All Requests</h4>
						</div>
						
					</div>
					<div class="row filter-row">
						
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive ">
								<table class="table table-striped custom-table datatable" id="example" >
									<thead>
										<tr>
											<th>S/N</th>
											<th >Type</th>
											<th>Contact Person</th>
											<th>Contact Phone</th>
											<th>Details</th>
                                            <th>Inspection Date</th>
                                            <th>Inspection Time</th>
                                             <th>Status</th>
                                            <th class="text-right">Action</th>  
										</tr>
									</thead>
									<tbody>
										@foreach ($requests as $key => $request)
										<tr>
											<td>{{  $key+1 }}</td>
											<td>{{ $request->type == 1 ? 'Vehicle Inspection' : 'Property Inspection' }}</td>
                                            <td>{{ $request->contact_person }}</td>
											<td>{{ $request->contact_phone }}</td>
											<td>@foreach ($request->details as $key => $detail) {{ ucwords(str_replace('_',' ',$key)) }} :  <b style="color:red">{{ $detail }} </b>  @endforeach</td>
											
											<td>{{ $request->agreed_inspection_date }}</td>
											<td>{{ $request->agreed_inspection_time}}</td>
                                            <td>{{ $request->status}}</td>
											
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li>
													<a  href="{{route('request-update',$request->id)}}"><i class="fa fa-pencil m-r-5"></i> Update</a>
													<a  href="{{route('request-delete',$request->id)}}" onclick="event.preventDefault(); document.getElementById('delete-form-{{$request->id}}').submit();"><i class="fa fa-pencil m-r-5"></i> Delete</a>
                                                    <form id="delete-form-{{$request->id}}" action="{{route('request-delete',$request->id)}}" method="POST" style="display: none;">
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
	

			
        </div>

@endsection


@section('page_scripts')

<script>
	$(document).ready( function () {
    $('#example').DataTable();
	});
   
</script>



@endsection