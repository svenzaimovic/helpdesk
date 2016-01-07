@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 incident-form">
		<h1 class="Basic Incident Information"></h1>
		<div class="form-control">
			<label>Name</label>
			<input class="form-control" placeholder="Full Name">
		</div>
		<div class="form-control">
			<label>User</label>
			<input class="form-control" placeholder="Your Username">
		</div>
		<div class="form-control">
			<label>Group</label>
			<input class="form-control" placeholder="Your Group">
		</div>
		<div class="form-control">
			<label>Table</label>
			<input class="form-control" placeholder="Table Name">
		</div>
		<div class="form-control">
			<label>Incident Category</label>
			<input class="form-control" placeholder="Enter the incident category">
		</div>
		<div class="form-control">
			<label>Configuration Item</label>
			<input class="form-control" placeholder="Enter the configuration item">
		</div>
		<div class="form-control">
			<label>Description</label>
			<textbox class="form-control" placeholder="Enter the configuration item"></textbox>
		</div>
		<div class="form-control">
			<label>Impact</label>
			<input class="form-control" placeholder="Impact (1-5)">
		</div>
		<div class="form-control">
			<label>Urgency</label>
			<input class="form-control" placeholder="Urgency (1-5)">
		</div>
		<a href="#" class="btn btn-primary" style="float:right;">Submit</a>
	</div>
@stop