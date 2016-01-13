@extends('layouts.master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 incident-form">
	<form action="problemForm" method="post">
		<h1 class="title" style="margin-bottom:25px;">
			Basic Problem Information
		</h1>
		
			<label>Title</label>
			<input class="form-control" placeholder="Problem Name" name="title">

			<label>Description</label>
			<textarea class="form-control" placeholder="Enter the description" name="description"></textarea>

			<label>User</label>
			<input class="form-control" placeholder="Your Username" name="user">

			<label>Group</label>
			<input class="form-control" placeholder="Your Group" name="group">

			<label>Table</label>
			<input class="form-control" placeholder="Table Name (Incident)" name="table">

			<label>Assigned To</label>
			<input class="form-control" placeholder="Name" name="assigned">

			<label>Source</label>
			<input class="form-control" placeholder="Name" name="source">

			<label>Category</label>
			<input class="form-control" placeholder="Category" name="category">

			<label>Impact</label>
			<input class="form-control" placeholder="Impact (1-5)" name="impact">

			<label>Urgency</label>
			<input class="form-control" placeholder="Urgency (1-5)" name="urgency">

			<label>Affected Services</label>
			<textarea class="form-control" placeholder="Name" name="services"></textarea>

		<input id="saveForm" type="submit" value="Submit" class="btn btn-primary" style="float:right;margin-top:25px;" value="Submit!" />
	</form>
	</div>
@stop