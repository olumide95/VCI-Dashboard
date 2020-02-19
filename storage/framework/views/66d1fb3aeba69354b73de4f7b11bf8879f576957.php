<?php $__env->startSection('title', '| Users'); ?>

<?php $__env->startSection('alluser_active', 'active'); ?>

<?php $__env->startSection('content'); ?> 

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Users</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="<?php echo e(url ('admin/users/create')); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add User</a>
							
						</div>
					</div>
                           
                        
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Email</th>
											<th>Created Date</th>
											<th>Role</th>
										  <th class="text-right">Action</th>  
										</tr>
									</thead>
									<tbody>
										<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td>
												<a href="#" class="avatar"><?php echo e($user->name[0]); ?></a>
												<h2><a href="#"><?php echo e($user->name); ?> </a></h2>
											</td>
											<td><?php echo e($user->email); ?></td>
										 
											<td><?php echo e($user->created_at); ?></td>
											<td>
												<span class="label label-danger-border"><?php echo e($user->roles[0]->name); ?></span>
											</td>

											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li>
													<a  href="<?php echo e(route('users.edit',$user->id)); ?>"><i class="fa fa-pencil m-r-5"></i> Update</a>
													<a  href="<?php echo e(route('users.destroy',$user->id)); ?>" onclick="event.preventDefault(); document.getElementById('delete-form').submit();"><i class="fa fa-pencil m-r-5"></i> Delete</a>
                                                    <form id="delete-form" action="<?php echo e(route('users.destroy',$user->id)); ?>" method="POST" style="display: none;">
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

  
                                

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>

<script>
	$(document).ready( function () {
    $('#example').DataTable();
	});
        
</script> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('users.users', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>