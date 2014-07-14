@extends('templates.template')

@section('pagetitle')
<h2>Here are your fake users!</h2>

@stop

@section('body')

<?php
		
		$faker = Faker\Factory::create(); //instantiate new Faker
		echo ('Made a faker');
		//echo $faker->name;
		// echo $faker->address;
		// echo $faker->phonenumber;

		

    // <div class="result">
    	// @foreach ($paragraphs as $paragraph)
    		// <p>{{ $paragraph }}</p>
    	// @endforeach
    // </div>
@stop