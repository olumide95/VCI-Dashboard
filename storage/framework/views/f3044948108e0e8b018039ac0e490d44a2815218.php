<?php $__env->startSection('content'); ?>
<div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>VerifyCustomerInfo</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?php echo e(route('login')); ?>" method="post" class="form-element">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                    <?php endif; ?>
                    <span class="ion ion-email form-control-feedback"></span>
                </div>
                <div class="<?php echo e($errors->has('password') ? ' has-error' : ''); ?> has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                     <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    <span class="ion ion-locked form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="checkbox">
                            <input type="checkbox" id="basic_checkbox_1">
                            <label for="basic_checkbox_1">Remember Me</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <div class="fog-pwd">
                            <a href="#"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">SIGN IN</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


              <!--  <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
            </div>
         /.social-auth-links -->

            <div class="margin-top-30 text-center">
              <!--  <p>Don't have an account? <a href="register.html" class="text-info m-l-5">Sign Up</a></p>-->
            </div>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>