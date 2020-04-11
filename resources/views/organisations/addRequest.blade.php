
@extends('organisations.organisations')

@section('title', '| Add Report')

@section('add-request_active', 'active')

@section('content') 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Add a new Request</h4>
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
					<form class="m-b-30" action="{{url('/requests/add')}}" method="POST" enctype="multipart/form-data" role="form" >
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="row">

								<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label">Request Type</label>
											<select class="form-control" type="text" name="type"  onchange='ask(this.value);' required>
												<option value="">select type</option>
												<option value="1">Vehicle Inspection</option>
												<option value="2">Property Inspection</option>
											</select>
										</div>
									</div>
									
									@if(Auth::user()->isOrganisation())
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Requester <span class="text-danger">*</span></label>
										   <input class="form-control" type="text" name="requester" value="{{old('requester')}}" required>
										</div>
									</div>

									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Requester Email <span class="text-danger">*</span></label>
										   <input class="form-control" type="email" name="requester_email" value="{{old('requester_email')}}" required>
										</div>
									</div>

									@else
									 <input  type="hidden" name="requester" value="{{Auth::user()->name}}" required>
									 <input  type="hidden" name="requester_email" value="{{Auth::user()->email}}" required>
									@endif
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Agreed Inspection Date <span class="text-danger">*</span></label>
										   <input class="form-control" type="date" name="agreed_inspection_date" value="{{old('agreed_inspection_date')}}" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Agreed Inspection Time <span class="text-danger">*</span> </label>
											<input class="form-control"  id="timeInput" type="time" onchange="onTimeChange()" value="{{old('agreed_inspection_time')}}" required>
											<input class="form-control" style="display:none" id="agreed_inspection_time" type="hidden" name="agreed_inspection_time" value="{{old('agreed_inspection_time')}}" required>
										
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Owner's Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="owner_name" value="{{old('owner_name')}}" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Owner's Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="owner_phone" value="{{old('owner_phone')}}" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Contact Person <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="contact_person" value="{{old('contact_person')}}" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Contact Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="number" name="contact_phone" value="{{old('contact_phone')}}" required>
										</div>
									</div>

									<div id="property_form" style="display:none"> 
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Property Description<span class="text-danger">*</span></label>
											<textarea class="form-control"  name="property description"></textarea>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Property Specification<span class="text-danger">*</span></label>
											<textarea class="form-control"  name="property specification"></textarea>
										</div>
									</div>
									</div>

									<div id="vehicle_form" style="display:none">
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Make<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Make" value="{{old('Make')}}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Type<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Type" value="{{old('Type')}}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Year<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Year" value="{{old('Year')}}">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Color<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Color" value="{{old('Color')}}">
										</div>
									</div>

									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Vehicle Capacity<span class="text-danger">*</span>  </label>
												<select class="form-control" name="capacity">
													<option value="" >Select Capacity</option>
													<option value="Below 1.6 cc" >Below 1.6 "cc"</option>
													<option value="Between 1.6 - 2.0 cc"  >Between 1.6 - 2.0 "cc"</option>
													<option value="Between 2.1 - 3.0 cc" >Between 2.1 - 3.0 "cc"</option>
													<option value="Above 3.0 cc" >Above 3.0 "cc"</option>
												</select>
											</div>
									
								
										</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Reg. Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Registration" value="{{old('Registration')}}">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Engine Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Engine Number" value="{{old('Engine Number')}}">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Chasis Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Chasis Number" value="{{old('Chasis Number')}}">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Mileage<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Mileage" value="{{old('Mileage')}}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Address<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="State" value="{{old('State')}}">
										</div>
									</div>


										
			 						</div>

									
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" type="submit">Submit Request</button>
								</div>
							</form>
                </div>

            </div>
			
        </div>

@endsection


@section('page_scripts')
<script>
	function ask(val){
	 var vehicle=document.getElementById('vehicle_form');
	 var property=document.getElementById('property_form');
	 if(val=='1'){
	   vehicle.style.display='block';
	   property.style.display='none';
	 }
	 else if(val=='2') {
	   vehicle.style.display='none';
	   property.style.display='block';

	 }
	 else if(val=='') {
	   vehicle.style.display='none';
	   property.style.display='none';

	 }
	}



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

  var inputEle = document.getElementById('agreed_inspection_time');
  inputEle.value = hours + ':' + minutes + ' ' + meridian;
}
</script>



@endsection