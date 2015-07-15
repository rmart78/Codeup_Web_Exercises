<?php 

include 'data.php';

 ?>
<article>
	<header>
		<h1><?= $post['title']; ?></h1>
		by <?= $post['author']; ?> &mdash; <?= $post['date']; ?>
	</header>
</article>