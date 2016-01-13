@extends('layouts.master')

@section('content')
<div class="contact-form">
    <form method="post" action="contactForm">
    <h1>Contact Support</h1>
    <div class="form-group">
        <label></label>
        <input class="form-control" placeholder="Full Name" name="name">
    </div>
    <div class="form-group">
        <label></label>
        <input class="form-control" placeholder="E-Mail Address" name="email">
    </div>
    <div class="form-group">
        <label>Describe your issue:</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Please provide us your screenshot:</label>
        <input type="file">
    </div>
    <input class="btn btn-primary" style="float:right;" type="submit" value="Submit!" />
</form>
</div>
@stop