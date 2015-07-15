<?php 

$favoriteThings = [
	
	'Whataburger',
	'Apple Products',
	'My Family',
	'My Friends',
	'Blue Bell Ice Cream'
];

 ?>
 <html>
 <head>
 	<title>My Favorite Things</title>

 	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>

 	<link rel="stylesheet" type="text/css" href="/css/my-favorite-things.css">

 </head>
 <body>
 	<div id="header"></div>
 	<div id="container">
 	<h1 id="title">Some of My Favorite Things Are:</h1>
 	<table id="favoriteList">
 		<?php foreach ($favoriteThings as $favoriteThing) : ?>
        <tr><td><?= $favoriteThing; ?></td></tr>
    	<?php endforeach ?>
 	</table>
 	</div>
 	<div id="footer"></div>
 </body>
 </html>