<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "./includes/head.php"; ?>
	<title>Assignment 5: Odd Student Out</title>
	<link rel="stylesheet" href="css/lgallery.min.css">
</head>
<body class="container">
	<?php include "includes/nav.php"; ?>

	
	<!-- Full Width Slideshow -->
	<div class="slideshow-box" data-lgslider="./images/change.png, ./images/won.png, ./images/glider.jpg " 
		data-lgnoscale="true"
		data-lgrender="true"
		data-lgnobtns = "true"
		data-lglabel="Akshay, Won, Tom"></div>


	<section class="article-grid">
		<section>
			<h2>Akshay Desai</h2>
			<p>I am a senior at the University of Rochester and majoring in Computer Science. I will be graduating this
				Spring and will be moving out to Seattle shortly after. On campus, I am also a Residential Advisor.</p>
		</section>
	
		<section>
			<h2>Won Kuk Lee</h2>
			<p>I am currently a senior at the University of Rochester. I’m majoring in Computer Science and plan to graduate
				this May with a Bachelor of Science. I have a passion for transforming innovative ideas to seamless and
				elegant web applications.</p>
		</section>
	
		<section>
			<h2>Tom Hogrefe</h2>
			<p>I’m a senior at the University of Rochester studying Political Science with a minor in Computer Science.
				Outside of class, I’m a member of Sigma Phi Epsilon and a Speaking Fellow. I enjoy aviation and programming
				in my spare time.</p>
		</section>

		<a href="student.php" class="myButton">
			<div>Read</div>
			<div>More</div>
		</a>
	</section>

	<?php include "includes/footer.php"; ?>

	<?php include "includes/scripts.php"; ?>
	<script src="js/lgallery.min.js"></script>
	<script >
		initLG()
	</script>

</body>
</html>