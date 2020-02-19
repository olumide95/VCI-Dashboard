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
                                    <h3><?php echo e($total); ?></h3>
                                    <span><a class="ariosh-blue-text" href="<?php echo e(route('allEmployees')); ?>"><strong>All Employees</strong></a></span><br><br>
                                    <h4><span class="text-danger">Male - <?php echo e($maleCount); ?> </span> | <span class="text-info">Female - <?php echo e($femaleCount); ?></span></h4>
                                    <strong><h4><span class="badge bg-primary"><?php echo e($fulltimeCount); ?></span> Fulltime | <span class="badge bg-primary"><?php echo e($contractCount); ?> </span> Contract | <span class="badge bg-primary"><?php echo e($internCount); ?></span> Intern </h4></strong>
                                </div>
                            </div>
                        </div>
                       


                        <!-- <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-building" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3><?php echo e($totaldept); ?></h3>
                                    <span><a class="ariosh-blue-text" href="<?php echo e(route('departments')); ?>"><strong>Departments</strong></a></span>
                                    <p class="text-danger">Male - <?php echo e($maleCount); ?> | Female - <?php echo e($femaleCount); ?></p>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-money" aria-hidden="true"></i></span>
                                <div class="dash-widget-info">
                                    <h3>44</h3>
                                    <span>Job Openings</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <div class="dash-widget clearfix card-box">
                                <span class="dash-widget-icon"><i class="la la-tasks"></i></span>
                                <div class="dash-widget-info">
                                    <h3>37</h3>
                                    <span>Tasks</span>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="col-md-6 text-center">
                                    <div class="card-box">
                                        <!-- <h3 class="card-title">Employee's Headcount (per month)</h3> -->
                                        <div>
                                            <?php echo $chart->render(); ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 text-center">
                                    <div class="card-box">
                                        <!-- <h3 class="card-title">Employee's Headcount (per month)</h3> -->
                                        <div>
                                            <?php echo $charts->render(); ?>

                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-6 text-center">
                                    <div class="card-box">
                                        <h3 class="card-title">Employee's Headcount (per month)</h3>
                                        <div id="bar-charts"></div>
                                    </div>
                                </div>

                                <div class="col-md-6 text-center">
                                    <div class="card-box">
                                        <h3 class="card-title">Headcount (per department)</h3>
                                        <div id="line-charts"></div>
                                    </div>
                                </div>
                                <div class="col-md-offset-3 col-md-6 text-center">
                                    <div class="card-box">
                                        <h3 class="card-title">Attrition Rate (per department)</h3>
                                        <div id="pie-charts"></div>
                                    </div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-table">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Contracts Update</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="invoice-view.html">042</a></td>
                                                    <td>
                                                        <h2><a href="#">Emeka Jonathan</a></h2>
                                                    </td>
                                                    <td>8 Feb 2018</td>
                                                    <td>10 April 2019</td>
                                                    <td>
                                                        <span class="label label-warning-border">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice-view.html">042</a></td>
                                                    <td>
                                                        <h2><a href="#">Emeka Jonathan</a></h2>
                                                    </td>
                                                    <td>8 Feb 2018</td>
                                                    <td>22 Oct 2019</td>
                                                    <td>
                                                        <span class="label label-success-border">Renewed</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice-view.html">042</a></td>
                                                    <td>
                                                        <h2><a href="#">Emeka Jonathan</a></h2>
                                                    </td>
                                                    <td>8 Feb 2018</td>
                                                    <td>10 Oct 2019</td>
                                                    <td>
                                                        <span class="label label-danger-border">Unpaid</span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="text-primary">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-table">
                                <div class="panel-heading">
                                    <h3 class="panel-title">New Employees</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">  
                                        <table class="table table-striped custom-table m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th>Job Title / Dept</th>
                                                    <th>Resumption Date</th>
                                                    <th>Employment Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="invoice-view.html">205</a></td>
                                                    <td>
                                                        <h2><a href="#">Emmanuella</a></h2>
                                                    </td>
                                                    <td>HR - Trainee</td>
                                                    <td>11 Feb 2018</td>
                                                    <td>Contract</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice-view.html">205</a></td>
                                                    <td>
                                                        <h2><a href="#">Emmanuella</a></h2>
                                                    </td>
                                                    <td>HR - Trainee</td>
                                                    <td>11 Feb 2018</td>
                                                    <td>Contract</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="invoice-view.html">205</a></td>
                                                    <td>
                                                        <h2><a href="#">Emmanuella</a></h2>
                                                    </td>
                                                    <td>HR - Trainee</td>
                                                    <td>11 Feb 2018</td>
                                                    <td>Contract</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="#" class="text-primary">View all</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>      
            </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('page_scripts'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>