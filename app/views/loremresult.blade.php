@extends('templates.template')

@section('pagetitle')
<h2>Here is your Lorem Ipsum text</h2>

@stop

@section('body')

<?php
		$generator = new Badcow\LoremIpsum\Generator(); //instantiate new Generator
		
		if ($paragraphsize == "small"){ // set small paragraph and sentence size
			$generator->setParagraphMean(3);
			$generator->setSentenceMean(10);
		}elseif ($paragraphsize == "mid"){ //set medium paraprah and sentence size
			$generator->setParagraphMean(5);
			$generator->setSentenceMean(18);
		}else{
			$generator->setParagraphMean(5);
			$generator->setSentenceMean(25);
		}

		$paragraphs = $generator->getParagraphs($qty); //create parapraphs
    ?>

    <div class="result">
    	@foreach ($paragraphs as $paragraph)
    		<p>{{ $paragraph }}</p>
    	@endforeach
    </div>
@stop