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
                    <div class="panel registration-panel">
                        <h1><small>Sign In</small>
                        <div class="form-group input-group" style="margin-top:15px;">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <a href="#" class="btn btn-primary" style="float:right;">Sign In!</a>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="panel registration-panel">
                        <h1><small>Register</small>
                        <div class="form-group input-group" style="margin-top:15px;">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" placeholder="E-Mail">
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <a href="#" class="btn btn-primary" style="float:right;">Register!</a>
                    </div>
                </div>
                
@stop