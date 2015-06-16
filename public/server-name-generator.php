<?php 

function randomAdjective() {
	$adjectives = [

		'Kick-Ass' => 'Kick-Ass',
		'Amazing' => 'Amazing',
		'Very Cool' => 'Very Cool',
		'Fantastic' => 'Fantastic',
		'Unique' => 'Unique',
		'Beautiful' => 'Beautiful',
		'Rude' => 'Rude',
		'Quick' => 'Quick',
		'Gorgeous' => 'Gorgeous',
		'Gentle' => 'Gentle'

];
	echo array_rand($adjectives);
}

function randomNoun() {
	$nouns = [

		'Accountant' => 'Accountant', 
		'Calculus' => 'Calculus', 
		'Driving' => 'Driving', 
		'Estimate' => 'Estimate', 
		'January' => 'January', 
		'Kitty' => 'Kitty', 
		'Operation' => 'Operation', 
		'Profit' => 'Profit', 
		'Sled' => 'Sled', 
		'Toilet' => 'Toilet'

];

	echo array_rand($nouns);

}

 ?>
 <html>
 <head>
 	<title>Server Name Generator</title>
 	<style type="text/css">

 	#container {
 		width: 50%;
 		margin-left: auto;
 		margin-right: auto;
 		margin-top: 20%;
 	}

 	#title, #random {
 		text-align: center;
 		font-family: 'Playfair Display', serif;
 	}

 	</style>

 	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

 </head>
 <body>
 	<div id="container">
 		<h1 id="title">Your Server Name Is:</h1>
 		<h2 id="random"><?php randomAdjective(); ?>
 		<?php echo '-'; ?>
 		<?php randomNoun(); ?></h2>
 	</div>
 </body>
 </html>