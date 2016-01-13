@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            Register <small>or Sign in</small>
        </h1>
    </div>
</div>
<div class="col-md-6">
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <div class="panel registration-panel">
            <h1><small>Sign In</small>
                <div class="form-group input-group" style="margin-top:15px;">
                    <span class="input-group-addon">@</span>
                    <input name="username" type="text" class="form-control" placeholder="Username" value="{{ old('username') }}">
                </div>
                <span class="error">{{ $errors->first('username') }}</span>
                <div class="form-group input-group" style="margin-top:15px;">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                </div>
                <span class="error">{{ $errors->first('email') }}</span>
                <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <span class="error">{{ $errors->first('password') }}</span>
                <input type="submit" class="btn btn-primary" style="float:right;" value="Sign In!" />
            </div>
        </div> 
    </form>
    <div class="col-md-6">
        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}
            <div class="panel registration-panel">
                <h1><small>Register</small>
                    <div class="form-group input-group" style="margin-top:15px;">
                        <span class="input-group-addon">@</span>
                        <input name="username" type="text" class="form-control" placeholder="Username" value="{{ old('username') }}">
                    </div>
                    <span class="error">{{ $errors->first('username') }}</span>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="name" type="text" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
                    </div>
                    <span class="error">{{ $errors->first('name') }}</span>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="email" type="email" class="form-control" placeholder="E-Mail" value="{{ old('email') }}">
                    </div>
                    <span class="error">{{ $errors->first('email') }}</span>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <span class="error">{{ $errors->first('password') }}</span>
                    <input type="submit" class="btn btn-primary" style="float:right;" value="Register!" />
                </div>
            </div>
        </form>

        @stop