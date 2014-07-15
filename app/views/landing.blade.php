@extends('templates.template')

@section('head')
	<title>Developers Best Friend</title>
@stop

@section('pagetitle')
	<h2>Welcome!</h2>
@stop

@section('body')
<p>Select your tool below</p>

<ul>
	<li>
		<a href="/lorem" class="button">Lorem Ipsum text generator</a>
	</li>
	<li>
		<a href="/usergen" class="button">Fake User generator</a>
	</li>
</ul>


@stop