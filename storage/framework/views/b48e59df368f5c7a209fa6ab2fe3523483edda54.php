<?php $__env->startSection('title', '| All Requests'); ?>

<?php $__env->startSection('requests_active', 'active'); ?>


<?php $__env->startSection('content'); ?> 

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
											<th>Details</th>
                                            <th>Inspection Date</th>
                                            <th>Inspection Time</th>
                                             <th>Status</th>
                                            <th class="text-right">Action</th>  
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($key+1); ?></td>
											<td><?php echo e($request->type == 1 ? 'Vehicle Inspection' : 'Property Inspection'); ?></td>
                                            
											<td><?php $__currentLoopData = $request->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e(ucwords(str_replace('_',' ',$key))); ?> :  <b style="color:red"><?php echo e($detail); ?> </b><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
											
											<td><?php echo e($request->agreed_inspection_date); ?></td>
											<td><?php echo e($request->agreed_inspection_time); ?></td>
                                            <td><?php echo e($request->status); ?></td>
											
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li>
													<a  href="<?php echo e(route('request-update',$request->id)); ?>"><i class="fa fa-pencil m-r-5"></i> Update</a>
													<a  href="<?php echo e(route('request-delete',$request->id)); ?>" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="fa fa-pencil m-r-5"></i> Delete</a>
                                                    <form id="delete-form" action="<?php echo e(route('request-delete',$request->id)); ?>" method="POST" style="display: none;">
															 <?php echo e(method_field('DELETE')); ?>

																<?php echo e(csrf_field()); ?>

													</form>
													</li>
														
													</ul>
												</div>
											</td>

										</tr>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>

            </div>
	

			
        </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>

<script>
	$(document).ready( function () {
    $('#example').DataTable();
	});
   
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('organisations.organisations', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>