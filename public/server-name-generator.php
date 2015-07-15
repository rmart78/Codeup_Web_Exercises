<?php 

function pullAdjective() {

	$adjectives = [

		'Kick-Ass',
		'Amazing',
		'Very Cool',
		'Fantastic',
		'Unique',
		'Beautiful',
		'Rude',
		'Quick',
		'Gorgeous',
		'Gentle'

	];

	$randomAdjective = array_rand($adjectives); 
	return $adjectives[$randomAdjective];

}

function pullNoun() {

	$nouns = [

		'Accountant', 
		'Calculus', 
		'Driving', 
		'Estimate', 
		'January', 
		'Kitty', 
		'Operation', 
		'Profit', 
		'Sled', 
		'Toilet'

	];

	$randomNoun = array_rand($nouns); 
	return $nouns[$randomNoun];

}

 ?>
 <html>
 <head>

 	<title>Server Name Generator</title>
 	
 	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

 	<link rel="stylesheet" type="text/css" href="/css/server-name-generator.css">

 </head>
 <body>

 	<div id="container">
 		<h1 id="title">Your Server Name Is:</h1>
 		<h2 id="random"><?= pullAdjective(); ?>
 		<?= '-'; ?>
 		<?= pullNoun(); ?></h2>
 		<button id="button">Generate a New Name</button>
 	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="/js/jquery-ui.js"></script>

	<script type="text/javascript">

	   	$('#button').click(function(){
		   		location.reload(true);
		});

	</script>

 </body>
 </html>