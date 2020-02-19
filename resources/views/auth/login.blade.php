@extends('layouts.app')

@section('content')
<div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>VerifyCustomerInfo</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="post" class="form-element">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="ion ion-email form-control-feedback"></span>
                </div>
                <div class="{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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

@endsection
