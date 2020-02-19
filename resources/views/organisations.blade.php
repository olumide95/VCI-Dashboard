
@extends('organisations.organisations')

@section('title', '| All Organisations')

@section('organisations_active', 'active')


@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">All Organisations</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="{{url ('admin/users/create')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Organisation</a>
							
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
											<th style="width:30%;">Name</th>
											<th>Address</th>
									
										</tr>
									</thead>
									<tbody>
										@foreach ($organisations as $organisation)
										<tr>
											<td>{{ $organisation->id }}</td>
											
											<td>{{ $organisation->name }}</td>
											<td>{{ $organisation->address}}</td>
											
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