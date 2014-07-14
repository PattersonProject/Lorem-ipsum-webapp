<!DOCTYPE html>
<html lang='en'>
<head> 
	<meta charset="UTF-8">
	<title>My landing page </title>
</head>
<body>
	<h1>I made a viwe </head1>
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(5);
    	$data['paragraphs']=$paragraphs;
    	print_r($paragraphs);
    ?>
</body>