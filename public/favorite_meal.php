<?php
	var_dump($_POST)
?>	
<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Meal</title>
</head>
<body>
	<header>
		<h1>My Favorite Meal: Sapporo Sushi</h1>
	</header>
	<main>
		<h2>Ingredients</h2>
		<ol>
			<li>Rice</li>
			<li>Seaweed</li>
			<li>Avocado</li>
			<li>Fish</li>
			<li>And Most Important of All...</li>
			<li>...Tender Loving Care</li>
		</ol>
		<form method="POST" action="/favorite_meal.php">
			<h3>Have a Favorite Meal Suggestion? Let Us Know.</h3>
			<p>
            	<input id="suggestion" name="suggestion" type="text" placeholder="Suggestions">
			</p>
			<p>
				<input type="submit" value="Send" title="Click to Send Your Suggestion">
			</p>
		</form>
	</main>	
	<aside>
		<h3>Other Foods You May Like</h3>
		<ul>
			<li><a href="#" title=Nigori Recipe>Nigori</a></li>
			<li><a href="#" title=Bento Box Recipe>Bento Box</a></li>
			<li><a href="#" title=Fried Rice Recipe>Fried Rice</a></li>
		</ul>	
	</aside>
</body>
</html>