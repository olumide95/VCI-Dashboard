
@extends('organisations.organisations')

@section('title', '| All Requesters')

@section('requesters_active', 'active')


@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">All Requesters</h4>
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
											<th>Name</th>
											<th>Email</th>
                                           
										</tr>
									</thead>
									<tbody>
										@foreach ($requesters as $key => $requester)
										<tr>
											<td>{{  $key+1 }}</td>
											<td>{{ $requester->user->name }}</td>
                                            <td>{{ $requester->user->email }}</td>
											

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

