
@extends('organisations.organisations')

@section('title', '| Add Report')

@section('add-report_active', 'active')

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
					<form class="m-b-30" action="{{url('admin/report/add')}}" method="POST" enctype="multipart/form-data" role="form" >
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
								<div class="col-md-12"> <h2>Introduction</h2> </div>
                                <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Owner Name <span class="text-danger">*</span></label>
										   <input class="form-control" type="text" name="owner" value="{{old('owner')}}" required>
										</div>
                                    </div>
                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label"> Inspection Date <span class="text-danger">*</span></label>
										   <input class="form-control" type="date" name="inspection_date" value="{{old('inspection_date')}}" required>
										</div>
                                    </div>

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label"> Inspection Time <span class="text-danger">*</span> </label>
											<input class="form-control"  id="timeInput" type="time" onchange="onTimeChange()" value="{{old('inspection_time')}}" required>
											<input class="form-control" style="display:none" id="inspection_time" type="hidden" name="inspection_time" value="{{old('inspection_time')}}" required>
										
										</div>
                                    </div>
                                    
                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Contact Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="number" name="contact_phone" value="{{old('contact_phone')}}" required>
										</div>
                                    </div>
                                    

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Address<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="address" value="{{old('address')}}" required>
										</div>
                                    </div>
                                    

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email<span class="text-danger">*</span></label>
											<input class="form-control" type="email" name="email" value="{{old('email')}}" required>
										</div>
                                    </div>
                                    

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Color<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="color" value="{{old('color')}}" required>
										</div>
                                    </div>
                                    

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Chassis/VIN Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="chasis_number" value="{{old('chasis_number')}}" required>
										</div>
                                    </div>
                                    

                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Engine Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="engine_number" value="{{old('engine_number')}}" required>
										</div>
                                    </div>


                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Odometer Reading<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="odometer_reading" value="{{old('odometer_reading')}}" required>
										</div>
                                    </div>

								<div class="col-md-12"> <h2>Body Integrity</h2> </div>
                                    
									
									 
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Full Left Side <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Full Left Side]" value="{{old('body_integrity[Full Left Side]')}}" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Full Right Side <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Full Right Side]" value="{{old('body_integrity[Full Right Side]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Back with License Plate <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Back with License Plate]" value="{{old('body_integrity[Back with License Plate]')}}" required>
										</div>
									</div>



									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Front with License Plate <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Front with License Plate]" value="{{old('body_integrity[Front with License Plate]')}}" required>
										</div>
									</div>



									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Interior Front <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Interior Front]" value="{{old('body_integrity[Interior Front]')}}" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Interior Back <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Interior Back]" value="{{old('body_integrity[Interior Back]')}}" required>
										</div>
									</div>



									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Chasis <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Chasis]" value="{{old('body_integrity[Chasis]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Trunk <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Trunk]" value="{{old('body_integrity[Trunk]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Spare Tyre <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="body_integrity[Spare Tyre]" value="{{old('body_integrity[Spare Tyre]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Driver's Seat<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Drivers Seat]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Doors<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Doors]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Seat Belts<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Seat Belts]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Reflex Reflectors<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Reflex Reflectors]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Floors<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Floors]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Bumpers<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Bumpers]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Airbag Driver<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Airbag Driver]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Airbag Passenger<span class="text-danger">*</span>  </label>
												<select class="form-control" name="body_integrity[Airbag Passenger]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


								 <div class="col-md-12"> <h2>Vehicle Information</h2> </div>

								 <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Papers <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="vehicle_information[Vehicle Papers]" value="{{old('vehicle_information[Vehicle Papers]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Purchase Receipt (Change of Ownership Doc) <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="vehicle_information[Purchase Receipt]" value="{{old('vehicle_information[Purchase Receipt]')}}" required>
										</div>
									</div>



									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Number of Keys<span class="text-danger">*</span></label>
											<input class="form-control" type="number" name="vehicle_information[keys]" value="{{old('vehicle_information[keys]')}}" required>
										</div>
                                    </div>


                                    <div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Usage Status<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Usage Status]" value="{{old('vehicle_information[Usage Status]')}}" required>
										</div>
									</div>
									

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Plate Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Plate Number]" value="{{old('vehicle_information[Plate Number]')}}" required>
										</div>
									</div>
									

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Year<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Year]" value="{{old('vehicle_information[Year]')}}" required>
										</div>
									</div>
									

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Make<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Make]" value="{{old('vehicle_information[Make]')}}" required>
										</div>
									</div>
									

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Model<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Model]" value="{{old('vehicle_information[Model]')}}" required>
										</div>
									</div>
									

								 
									
									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Engine Capacity<span class="text-danger">*</span>  </label>
												<select class="form-control" name="vehicle_information[Capacity]" required>
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
										<label for="">Do the Keys Start the Car<span class="text-danger">*</span>  </label>
												<select class="form-control" name="vehicle_information[Do the Keys Start the Car]" required>
													<option value="" >Select</option>
													<option value="Yes">Yes</option>
													<option value="No">No</option>
													 
												</select>
											</div>
									
								
										</div>


									<div class="col-sm-6">

										<div class="form-group">
									<label for="">Seat Belt Present<span class="text-danger">*</span>  </label>
											<select class="form-control" name="vehicle_information[Seat Belt Present]" required>
												<option value="" >Select</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
													
											</select>
										</div>
								
							
									</div>


									<div class="col-sm-6">

										<div class="form-group">
									<label for="">Portable Fire Extinguisher<span class="text-danger">*</span>  </label>
											<select class="form-control" name="vehicle_information[Portable Fire Extinguisher]" required>
												<option value="" >Select</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
													
											</select>
										</div>
								
							
									</div>


									<div class="col-sm-6">

										<div class="form-group">
									<label for="">Security System/Immobilizer Installed<span class="text-danger">*</span>  </label>
											<select class="form-control" name="vehicle_information[Security System/Immobilizer Installed]" required>
												<option value="" >Select</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
													
											</select>
										</div>
								
							
									</div>


									<div class="col-sm-6">

										<div class="form-group">
									<label for="">Vehicle Tracking System Installed<span class="text-danger">*</span>  </label>
											<select class="form-control" name="vehicle_information[Vehicle Tracking System Installed]" required>
												<option value="" >Select</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
													
											</select>
										</div>
								
							
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Maintenance Plan (Garage & Last Service)<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="vehicle_information[Maintenance Plan (Garage & Last Service)]" value="{{old('vehicle_information[Maintenance Plan (Garage & Last Service)]')}}" required>
										</div>
									</div>


									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Date of Purchase<span class="text-danger">*</span></label>
										   <input class="form-control" type="date" name="vehicle_information[Date of Purchase]" value="{{old('vehicle_information[Date of Purchase]')}}" required>
										</div>
									</div>
									


								
								<div class="col-md-12"> <h2>Driver's Controls</h2> </div>


									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Vehicle Mobility Test<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Vehicle Mobility Test]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

									
										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Horn<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Horn]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Mirrors<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Mirrors]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Windshield Wipers<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Windshield Wipers]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Windshield and Windows<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Windshield and Windows]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Windshield Defroster<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Windshield Defroster]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Visors<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Visors]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Interior Heaters<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Interior Heaters]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Parking Break<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Parking Break]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Power Break Operation<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Power Break Operation]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Break Pedal Reserve and Leakage Test<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Break Pedal Reserve and Leakage Test]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Steering Lash and Travel<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Steering Lash and Travel]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Power Steering<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Power Steering]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>



										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Handle Bars<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Handle Bars]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Accelerator Pedal<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Accelerator Pedal]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Transmission/Speed/Odom<span class="text-danger">*</span>  </label>
												<select class="form-control" name="drivers_controls[Transmission/Speed/Odom]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>



										<div class="col-md-12"> <h2>Lighting & Electric</h2> </div>

	 				 					<div class="col-sm-6">

											<div class="form-group">
										<label for="">Battery<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Battery]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Switches<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Switches]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Visible Wiring<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Visible Wiring]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Indicator Lights<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Indicator Lights]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Headlight Aim<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Headlight Aim]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Lamps<span class="text-danger">*</span>  </label>
												<select class="form-control" name="lighting_electric[Lamps]" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-md-12"> <h2>Other Details</h2> </div>


										 
										<div class="col-sm-6" >  
										<div class="form-group">
											 
											<input type="checkbox" name="other_details[Vehicle has been roadtested]" value="Yes" > Vehicle has been roadtested
											<input type="checkbox" name="other_details[Altered_or_Modified]" value="Yes" > Altered or Modified
											<input type="checkbox" name="other_details[U-Built]" value="Yes" > U-Built
											 
											<input type="checkbox" name="other_details[Replicar]" value="Yes" > Replicar
											<input type="checkbox" name="other_details[Amalgamated]" value="Yes" > Amalgamated
											<input type="checkbox" name="other_details[Replikit]" value="Yes" > Replikit
										 
										</div>
									</div>

										<div class="col-md-12"> <h2>Inspection Result</h2> </div>

										<div class="col-sm-6">

											<div class="form-group">
										<label for="">Inspection Result<span class="text-danger">*</span>  </label>
												<select class="form-control" name="inspection_result" required>
													<option value="" >Select Result</option>
													<option value="Passed" >Passed</option>
													<option value="Failed" >Failed</option>
													 
												</select>
											</div>
									
								
										</div>


										<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label"> Inspected By <span class="text-danger">*</span> </label>
											<input class="form-control"  name="inspected_by"  type="text" value="{{old('inspected_by')}}" required>
										 
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Signature <span class="text-danger">*</span></label>
										   <input class="form-control" type="file" name="signature" value="{{old('signature')}}" required>
										</div>
									</div>
                                    



								 
								 <div class="col-md-12 text-center"> <button class="btn btn-primary" type="submit">Submit Request</button> </div>
									
								
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