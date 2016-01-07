@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 incident-form">
		<h1 class="Basic Incident Information"></h1>
		
			<label>Name</label>
			<input class="form-control" placeholder="Full Name">

			<label>User</label>
			<input class="form-control" placeholder="Your Username">

			<label>Group</label>
			<input class="form-control" placeholder="Your Group">

			<label>Table</label>
			<input class="form-control" placeholder="Table Name">

			<label>Incident Category</label>
			<input class="form-control" placeholder="Enter the incident category">

			<label>Configuration Item</label>
			<input class="form-control" placeholder="Enter the configuration item">

			<label>Description</label>
			<textarea class="form-control" placeholder="Enter the configuration item"></textarea>

			<label>Impact</label>
			<input class="form-control" placeholder="Impact (1-5)">

			<label>Urgency</label>
			<input class="form-control" placeholder="Urgency (1-5)">

		<a href="#" class="btn btn-primary" style="float:right;">Submit</a>
	</div>
@stop