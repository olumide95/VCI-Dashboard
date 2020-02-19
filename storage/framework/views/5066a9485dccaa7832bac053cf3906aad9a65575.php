<?php $__env->startSection('home_active', 'active'); ?>

<?php $__env->startSection('content'); ?>


            
            <div class="page-wrapper">

    <?php if(session('status')): ?>
                        <div>
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                <div class="content container-fluid">
                    <div class="row">
                         
                       
<div class="col-md-6 col-sm-6 col-lg-6">
                            
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($pending_request); ?></h3>
                                    <span>Pending Request(s)</span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($completed_request); ?></h3>
                                    <span>Completed Request(s)</span>
                                </div>
                            </div>
                        </div> 

                    
                        
                    </div>

                    
                        
                    </div>

                 
                            </div>
                        </div>
                    </div>

                    
                </div>      
            </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>