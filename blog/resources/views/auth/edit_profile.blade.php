@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="edit">
                        {{ csrf_field() }}
						<input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ $data->fname }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ $data->lname }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('uname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">USer Name</label>

                            <div class="col-md-6">
                                <input id="uname" type="text" class="form-control" name="uname" value="{{ $data->uname }}" required autofocus>

                                @if ($errors->has('uname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required>

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
                                <input id="password" type="password" class="form-control" name="password" required value="{{ $data->password }}">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $data->password }}" required>
                            </div>
                        </div>
			
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
							@if($data->gen == "Male")
                                <input id="gen" type="radio"  name="gen" value="Male" checked> Male 
								<input id="gen" type="radio"  name="gen" value="Female"> Female 
							@else
								<input id="gen" type="radio"  name="gen" value="Male" > Male 
								<input id="gen" type="radio"  name="gen" value="Female" checked> Female 
							@endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" value="{{ $data->status }}" required autofocus>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('cno') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Contact No</label>

                            <div class="col-md-6">
                                <input id="cno" type="text" class="form-control" name="cno" value="{{ $data->cno }}" required autofocus>

                                @if ($errors->has('cno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">D.O.B.</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ $data->dob }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
