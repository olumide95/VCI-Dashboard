
@extends('users.users')

@section('title', '| Add User')

@section('addUser_active', 'active')

@section('content') 
  <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h4 class="page-title">Update {{ $user->name }}</h4>
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
                
                        


  <form class="form-horizontal" method="POST" action="{{ route('users.update',$user->id) }}"  >
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">

                            <select class="form-control" type="select" name="roles" id="role" required>
                                <option value="">select Role</option>
                                @foreach($roles as $role) 
								 <option value="{{$role}}" @if(isset($userRole[$role])) {{'selected'}} @endif>{{$role}}</option>
                                @endforeach
											
							 </select>
                              @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="organisation" class="form-group{{ $errors->has('organisation') ? ' has-error' : '' }}" style="display:none" >
                            <label for="name" class="col-md-4 control-label">Organisation</label>

                            <div class="col-md-6">

                            <select class="form-control" type="text" name="organisation" id="organisation_input" required>
                                <option value="">select Organisation</option>
                                @foreach($organisations as $organisation) 
								 <option value="{{$organisation->user_id}}" @if($organisation_id == $organisation->user_id) {{'selected'}} @endif >{{$organisation->name}}</option>
                                @endforeach
											
							 </select>
                              @if ($errors->has('organisation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organisation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required autocomplete="off" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="off" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="confirm-password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
			
        </div>

			

@endsection


@section('page_scripts')
<script>

$( document ).ready(function() {

    show_hide_organisation('{{$userRole['Requester'] ?? ''}}');

});

function show_hide_organisation(role){
    var organisation = document.getElementById('organisation');
    var organisation_input = document.getElementById('organisation_input');
        if(role == 'Requester'){
            organisation_input.required = true;
            organisation.style.display='block';
             
        }
        else{
            organisation_input.required = false;
             organisation.style.display='none';
             
        }
}

$("#role").change(function(){
        
    show_hide_organisation($(this).children("option:selected").val());
});

</script>



@endsection