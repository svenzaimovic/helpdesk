@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 incident-form">
		<h1 class="title" style="margin-bottom:25px;">
			Basic Problem Information
		</h1>
		
			<label>Title</label>
			<input class="form-control" placeholder="Problem Name">

			<label>Description</label>
			<textarea class="form-control" placeholder="Enter the description"></textarea>

			<label>User</label>
			<input class="form-control" placeholder="Your Username">

			<label>Group</label>
			<input class="form-control" placeholder="Your Group">

			<label>Table</label>
			<input class="form-control" placeholder="Table Name (Incident)">

			<label>Assigned To</label>
			<input class="form-control" placeholder="Name">

			<label>Source</label>
			<input class="form-control" placeholder="Name">

			<label>Category</label>
			<input class="form-control" placeholder="Category">

			<label>Impact</label>
			<input class="form-control" placeholder="Impact (1-5)">

			<label>Urgency</label>
			<input class="form-control" placeholder="Urgency (1-5)">

			<label>Affected Services</label>
			<textarea class="form-control" placeholder="Name"></textarea>

		<a href="#" id="saveForm" type="submit" name="submit" value="Submit"class="btn btn-primary" style="float:right;margin-top:25px;">Submit</a>
	</div>
@stop