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

 	<style type="text/css">

 		li:nth-child(odd) {
 			background-color: #D1D1E0;
 		}

 		li {
 			list-style-type: none;
 			margin-right: 20%;
 		}

 		#container {
 			width: 50%;
 			margin-left: auto;
 			margin-right: auto;
 			text-align: center;
 			margin-top: 10%;
 		}

 		ul {
 			width: 100%;
 		}

 		html {
 			box-sizing: border-box;
	 		font-family: 'Playfair Display', serif;

 		}

 	</style>
 </head>
 <body>
 	<div id="container">
 	<h1>Some of My Favorite Things Are:</h1>
 	<ul>
 		<?php foreach ($favoriteThings as $favoriteThing) { ?>
        <li><?php echo $favoriteThing ?></li>
    	<?php } ?>
 	</ul>
 	</div>
 </body>
 </html>