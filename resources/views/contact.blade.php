@extends('layouts.master')

@section('content')
<div class="contact-form">
    <h1>Contact Support</h1>
    <div class="form-group">
        <label></label>
        <input class="form-control" placeholder="Full Name">
    </div>
    <div class="form-group">
        <label></label>
        <input class="form-control" placeholder="E-Mail Address">
    </div>
    <div class="form-group">
        <label>Describe your issue:</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Please provide us your screenshot:</label>
        <input type="file">
    </div>
    <a href="#" class="btn btn-primary" style="float:right;">Submit</a>
</div>
@stop