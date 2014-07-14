@extends('templates.template')

@section('head')
	<title>User generator</title>

@stop

@section('pagetitle')
<h2>User Generator</h2>

@stop

@section('body')

{{Form::open(array('url' => '/usergen')) }}
	
	<p>
	{{ Form::label('qty','How many users do you want to generate?')}}
	{{ Form::text('qty','5') }}
	</p>
	
	<fieldset>
		<legend>Additional Options (all users have a name)</legend>
		<ul>
			<li>
				<lable for='addressbox'>
					<input type="checkbox" name="address" value="address" id="addressBox">
					Address	
				</lable>	
			</li>
			<li>
				<lable for='phoneBox'>
					<input type="checkbox" name="phonenumber" value="phone" id="phoneBox">
					Phone
				</label>
			</li>
			<li>
				<label for="birthdateBox">
					<input type="checkbox" name="birthdate" value="birthdate" id="birthdateBox">
					Birthdate
				</label>
			</li>
			<li>
				<label for="emailBox">
					<input type="checkbox" name="email" value="email" id="emailBox">
					Email
				</label>
			</li>
		</ul>
	</fieldset>
	<br/>
	<input type="submit"  value="Get Users!" name="submit" id="userSubmit">

{{Form::close()}}

@stop