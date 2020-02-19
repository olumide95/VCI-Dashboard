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
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($users); ?></h3>
                                    <span><a class="ariosh-blue-text" href="#"><strong> Users</strong></a></span><br><br>
                                        </div>
                            </div>
                        </div>
                       
<div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-building" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($admins); ?> </h3>
                                    <span> Admins </span>
                                    
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-money" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($organisations); ?></h3>
                                    <span>Organisations</span>
                                </div>
                            </div>
                        </div>
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

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>