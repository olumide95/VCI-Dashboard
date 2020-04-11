
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
											<th >Req. Code</th>
											<th >Type</th>
											<th>Owner</th>
											<th>Owner Phone</th>
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
											<td>VCI-{{$request->id}}{{$request->organisation_id}}{{$request->type}}</td>
											<td>{{ $request->type == 1 ? 'Vehicle Inspection' : 'Property Inspection' }}</td>
											 <td>{{ $request->owner_name }}</td>
											<td>{{ $request->owner_phone }}</td>
                                            <td>{{ $request->contact_person }}</td>
											<td>{{ $request->contact_phone }}</td>
										 <td>	<a class="btn btn-md view_details"   data-toggle="modal"  data-details="{{json_encode($request)}}" data-target="#view" href="#"><i class="fa fa-eye m-r-5"></i> View</a> </td>
												
											<td>{{ $request->agreed_inspection_date }}</td>
											<td>{{ $request->agreed_inspection_time}}</td>
                                            <td>{{ $request->status}}</td>
											
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li>
													@if($request->status == 'Completed')
													<a href="{{route('view-report')}}?r_id={{$request->id}}"><i class="fa fa-pencil m-r-5"></i> View Report</a>
													@endif
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


		<div id="view" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Inspection Type - <span id="ins_type"> </span> (<span id="status"> </span>)</h4>
						</div>
						<div class="modal-body">
							<p >
								Requested By - <b><span id="requester"> </span> (<span id="requester_email"> </span>)</b>
							</p>
							<p >
								Owner - <b><span id="owner"> </span> (<span id="owner_phone"> </span>)</b>
							</p>
			
							<p >
								Contact Person - <b><span id="contact"> </span> (<span id="contact_phone"> </span>)</b>
							</p>
							<p >
								Inspection Date/Time - <b>(<span id="ins_date"> </span> @ <span id="ins_time"> </span>)</b>
							</p>
							 <span id="details-section" style="text-transform: capitalize;"> </span>
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
   
	$('.view_details').click(function() {
   
	var request = $(this).data('details');
	$('#ins_type').html(request == 1 ? 'Vehicle Inspection' : 'Property Inspection' );
	$('#status').html(request.status );
	$('#requester').html(request.requester );
	$('#requester_email').html(request.requester_email );
	$('#contact').html(request.contact_person );
	$('#contact_phone').html(request.contact_phone);
	$('#owner').html(request.owner_name);
	$('#owner_phone').html(request.owner_phone);
	$('#ins_time').html(request.agreed_inspection_time );
	$('#ins_date').html(request.agreed_inspection_date ); 
	 
	 var info = '';
	for(var detail in request.details){
		console.log(detail);
		info+='<p> '+(detail === 'State' ? 'Address':detail.replace(/_/g, " "))+' - <b>'+request.details[detail]+ ' </b></p>';
	 
	}
	$('#details-section').html(info);
    // since the value of href is what we want, so I just did it like so
    console.log(request);
    
});
</script>



@endsection