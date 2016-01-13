@extends('layouts.master')

@section('content')
<form id="form_1085042" class="appnitro"  method="post" action="changeForm">
					<div class=" form_description">
			<h2>Resolving of Changes</h2>
			<p>If you have encountered a problem with our services please fill out the form below. We will assure you that the form will be taken into consideration and resolved in our earliest convenience.</p>
		</div>						
					<label class=" description" for="element_15">Resolved </label>
		<span>
			<input id="element_15_1" name="element_15" class="form-control element radio" type="radio" value="1" />
<label class=" choice" for="element_15_1">YES</label> <br>

		<label class="description" for="element_1">ID number </label>
		<div>
			<input id="element_9" name="number" class="form-control element text medium" type="number" maxlength="16" value=""/> 
		</div> 

		<label class="description" for="element_2">Title </label>
		<div>
			<input id="element_2" name="title" class="form-control element text medium" type="text" maxlength="255" value=""/> 
		</div> 

		<label class="description" for="element_3">Explain your problem to us in detail. </label>
		<div>
			<textarea id="element_3" name="explain" class="form-control element textarea medium"></textarea> 
		</div> 
			    <input type="hidden" name="form_id" value="1085042" />
			    
				<input id="saveForm" type="submit" name="submit" value="Submit"class="btn btn-primary" style="float:right;margin-top:25px;" />
		</form>	
@stop