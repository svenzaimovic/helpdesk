@extends('layouts.master')

@section('content')
<?php
/*
if (Input::has('element_9')) {
	DB::table('incident')->insert(
	    array(
	    	'number' => Input::post('element_9'),
	    	'title' => Input::post('element_2'),
	    	'category' => Input::post('element_6_6'),
	    	'description' => Input::post('element_3')
	    	)
	);
}
*/
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 incident-form">
	<h1 class="title" style="margin-bottom:25px;">Basic Incident Information</h1>

	<form id="form_1085042" class="appnitro"  method="post" action="incidentForm">
		<div>
			<h2>Incidents</h2>
			<p>If you have encountered a problem with our services please fill out the form below. We will assure you that the form will be taken into consideration and resolved in our earliest convenience.</p>
		</div>		

		<div class="inputs col-lg-12 col-md-12 col-sm-12 col-xs-12">				

		<div>
			<input style="margin-bottom:25px" class="form-control" id="element_9" name="number" type="text" maxlength="16" value="" placeholder="ID Number"/> 
		</div> 
		
		<div>
			<input style="margin-bottom:25px" class="form-control" id="element_2" name="title" type="text" maxlength="255" value="" placeholder="Title"/> 
		</div> 
		<div class="left">
			<label class="description" for="element_1">Category</label>
			<select class="element select medium form-control" id="element_6_6" name="category" placeholder="Category"> 
				<option value="" selected="selected"></option>
				<option value="app" >App</option>
				<option value="account" >Account</option>
				<option value="data" >Data</option>
			</select>
		</div>

		<label class="description" for="element_3">Description </label>
		<div>
			<textarea id="element_3" name="description" class="element textarea medium form-control" placeholder="Explain your problem to us in detail."></textarea> 
		</div> 
		<input type="hidden" name="form_id" value="1085042" />

		</div>

		<input id="saveForm" type="submit" class="btn btn-primary" style="float:right;margin-top:25px;" value="Submit!" />
	</form>	
</div>

@stop