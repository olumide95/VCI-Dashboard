<?php $__env->startSection('title', '| Add Employee'); ?>

<?php $__env->startSection('add-request_active', 'active'); ?>

<?php $__env->startSection('content'); ?> 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Update Request</h4>
						</div>
					</div>
						<?php if($errors->any()): ?>
						    <div class="alert alert-danger">
						        <ul>
						            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                <li><?php echo e($error); ?></li>
						            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        </ul>
						    </div>
						<?php endif; ?>
					<form class="m-b-30" action="<?php echo e(url('/requests/update/')); ?>/<?php echo e($request->id); ?>" method="POST" enctype="multipart/form-data" role="form" >
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
								<div class="row">

								<div class="col-sm-12">
										<div class="form-group">
											<label class="control-label">Request Type</label>
											<select class="form-control" type="text" name="type"  onchange='ask(this.value);' required>
												<option value="">select type</option>
												<option value="1" <?php if($request->type ==1): ?> <?php echo e('selected'); ?> <?php endif; ?></option>Vehicle Inspection</option>
												<option value="2" <?php if($request->type ==2): ?> <?php echo e('selected'); ?> <?php endif; ?>>Property Inspection</option>
											</select>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Requester <span class="text-danger">*</span></label>
										   <input class="form-control" type="text" name="requester" value="<?php echo e($request->requester); ?>" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Requester Email <span class="text-danger">*</span></label>
										   <input class="form-control" type="email" name="requester_email" value="<?php echo e($request->requester_email); ?>" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Agreed Inspection Date <span class="text-danger">*</span></label>
										   <input class="form-control" type="date" name="agreed_inspection_date" value="<?php echo e($request->agreed_inspection_date); ?>" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Agreed Inspection Time <span class="text-danger">*</span> </label>
											<input class="form-control"  id="timeInput" type="time" value="<?php echo e(substr($request->agreed_inspection_time,0,-3)); ?>" onchange="onTimeChange()"  required>
											<input class="form-control" style="display:none" id="agreed_inspection_time" type="hidden" name="agreed_inspection_time" value="<?php echo e($request->agreed_inspection_time); ?>" required>
										
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Contact Person <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="contact_person" value="<?php echo e($request->contact_person); ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Contact Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="number" name="contact_phone" value="<?php echo e($request->contact_phone); ?>">
										</div>
									</div>

									<div id="property_form" style="display:none"> 
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Property Description<span class="text-danger">*</span></label>
											<textarea class="form-control"  name="property description"><?php echo e($request->details['property_description'] ?? ''); ?></textarea>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Property Specification<span class="text-danger">*</span></label>
											<textarea class="form-control"  name="property specification"><?php echo e($request->details['property_specification'] ?? ''); ?></textarea>
										</div>
									</div>
									</div>

									<div id="vehicle_form" style="display:none">
									
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Make<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Make" value="<?php echo e($request->details['Make'] ?? ''); ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Type<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Type" value="<?php echo e($request->details['Type'] ?? ''); ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Year<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Year" value="<?php echo e($request->details['Year'] ?? ''); ?>">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Color<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Color" value="<?php echo e($request->details['Color'] ?? ''); ?>">
										</div>
									</div>

									<div class="col-sm-6">

											<div class="form-group">
										<label for="">Vehicle Capacity<span class="text-danger">*</span>  </label>
												<select class="form-control" name="capacity">
													<option value="" >Select Capacity</option>
													<option value="Below 1.6 cc" <?php if(isset($request->details['capacity']) && $request->details['capacity'] == "Below 1.6 cc"): ?> <?php echo e('selected'); ?> <?php endif; ?> >Below 1.6 "cc"  </option>
													<option value="Between 1.6 - 2.0 cc"  <?php if(isset($request->details['capacity']) && $request->details['capacity'] == "Between 1.6 - 2.0 cc"): ?> <?php echo e('selected'); ?> <?php endif; ?> >Between 1.6 - 2.0 "cc"  </option>
													<option value="Between 2.1 - 3.0 cc"  <?php if(isset($request->details['capacity']) && $request->details['capacity'] == "Between 2.1 - 3.0 cc"): ?> <?php echo e('selected'); ?> <?php endif; ?>>Between 2.1 - 3.0 "cc"  </option>
													<option value="Above 3.0 cc" <?php if(isset($request->details['capacity']) && $request->details['capacity'] == "Above 3.0 cc"): ?> <?php echo e('selected'); ?> <?php endif; ?> >Above 3.0 "cc"  </option>
												</select>
											</div>
									
								
										</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Reg. Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Registration" value="<?php echo e($request->details['Color'] ?? ''); ?>">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Vehicle Engine Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Engine Number" value="<?php echo e($request->details['Engine_Number'] ?? ''); ?>">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Chasis Number<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Chasis Number" value="<?php echo e($request->details['Chasis_Number'] ?? ''); ?>">
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Mileage<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="Mileage" value="<?php echo e($request->details['Mileage'] ?? ''); ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">State<span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="State" value="<?php echo e($request->details['State'] ?? ''); ?>">
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>
<script>
$( document ).ready(function() {
    var vehicle=document.getElementById('vehicle_form');
	 var property=document.getElementById('property_form');
    if(<?php echo e($request->type); ?>=='1'){
	   vehicle.style.display='block';
	   property.style.display='none';
	 }
	 else if(<?php echo e($request->type); ?>=='2') {
	   vehicle.style.display='none';
	   property.style.display='block';

	 }
});

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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('organisations.organisations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>