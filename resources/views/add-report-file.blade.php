
@extends('organisations.organisations')

@section('title', '| Add Report')

@section('add-report-file_active', 'active')

@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h4 class="page-title">Add a new Report</h4>
						</div>
					</div>
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					<form class="m-b-30" action="{{url('admin/report/upload')}}" method="POST" enctype="multipart/form-data" role="form" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="row">
									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Request<span class="text-danger">*</span>  </label>
												<select class="form-control" name="request_id" required>
													<option value="" >Select Request</option>
										  @foreach($requests as $request)
											 <option value="{{$request->id}}" >VCI-{{$request->id}}{{$request->organisation_id}}{{$request->type}}</option>
										  @endforeach  
												</select>
											</div>
									
								
										</div>
								<div class="col-md-12">  </div>
                               
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Upload Document <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="report_file" value="{{old('report_file')}}" required>
										</div>
									</div>


                                    <div class="col-sm-12">
										<div class="form-group">
											<button class="btn btn-primary" type="submit">Upload</button>
										</div>
									</div>
                                    



								
							</form>
                </div>

            </div>
			
        </div>

@endsection


@section('page_scripts')
<script>
	

function onTimeChange() {
var inputEle = document.getElementById('timeInput');
  var timeSplit = inputEle.value.split(':'),
    hours,
    minutes,
    meridian;
  hours = timeSplit[0];
  minutes = timeSplit[1];
  if (hours > 12) {
    meridian = 'PM';
    hours -= 12;
  } else if (hours < 12) {
    meridian = 'AM';
    if (hours == 0) {
      hours = 12;
    }
  } else {
    meridian = 'PM';
  }

  var inputEle = document.getElementById('inspection_time');
  inputEle.value = hours + ':' + minutes + ' ' + meridian;
}
</script>



@endsection