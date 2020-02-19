<?php $__env->startSection('title', '| All Organisations'); ?>

<?php $__env->startSection('organisations_active', 'active'); ?>


<?php $__env->startSection('content'); ?> 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">All Organisations</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="<?php echo e(url ('admin/users/create')); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Organisation</a>
							
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
										<?php $__currentLoopData = $organisations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organisation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($organisation->id); ?></td>
											
											<td><?php echo e($organisation->name); ?></td>
											<td><?php echo e($organisation->address); ?></td>
											
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