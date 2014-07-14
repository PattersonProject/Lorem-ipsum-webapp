@extends('templates.template')

@section('head')
	<title>Lorem Ipsum Generator</title>

@stop

@section('pagetitle')
<h2>Lorem Ipsum Generator</h2>

@stop

@section('body')

{{Form::open(array('url' => '/lorem')) }}
	
	<p>
	{{ Form::label('qty','How many paragraphs of text do you want')}}
	{{ Form::text('qty','5') }}
	</p>
	
	<fieldset>
		<legend>Paragraph size</legend>
		<ul>
			<li>
				<lable for='smallParagraphBox'>
					<input type="radio" name="paragraphsize" value="small" id="smallParagraphBox" checked>
					Small	
				</lable>	
			</li>
			<li>
				<lable for='midParagraphBox'>
					<input type="radio" name="paragraphsize" value="mid" id="midParagraphBox">
					Medium
				</label>
			</li>
			<li>
				<label for="largeParagraphBox">
					<input type="radio" name="paragraphsize" value="large" id="largeParagraphBox">
					Large
		</ul>
	</fieldset>
	<br/>
	<input type="submit"  value="Get Text!" name="submit" id="loremSubmit">

{{Form::close()}}

@stop