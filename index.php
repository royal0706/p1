<?php require('index-logic.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Oswald" rel="stylesheet">
	<title>Jane Austen</title>
	<meta charset="utf-8">

</head>
<body>
	<div class="main">

		<h1>Jane Austen</h1>

		<img src='images/austen.jpg' alt='Jane Austen'>

		<h2>About Jane</h2>
		<p>Jane Austen was an English novelist known primarily for her six major novels, which interpret, critique and comment upon the British landed gentry at the end of the 18th century. Austen's plots often explore the dependence of women on marriage in the pursuit of favourable social standing and economic security. Her works critique the novels of sensibility of the second half of the 18th century and are part of the transition to 19th-century literary realism. Her use of biting irony, along with her realism, humour, and social commentary, have long earned her acclaim among critics, scholars, and popular audiences alike.</p>

		<h2>Random Quote</h2>
		<blockquote>
			<?php 
						
			If ($number == 0) {
    				echo "It is a truth universally acknowledged, that a single man in 						possession of a good fortune, must be in want of a wife.";
			} elseif ($number == 1) {
   				echo "It isn't what we say or think that defines us, but what we do.";
			} elseif ($number == 2) {
    				echo "The person, be it gentleman or lady, who has not pleasure in a 						good novel must be intolerably stupid.";
			} elseif ($number == 3) {
    				echo "Good opinion once lost, is lost forever.";
			}
   			  else {
    				echo "Life seems but a quick succession of busy nothings.";
			} ?>		
		</blockquote>

	</div>

</body>
</html>