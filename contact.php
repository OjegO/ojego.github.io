<?php include "includes/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="style/main.css">
</head>

<body>
<div class="content">
	<header>
		<img src="img/logo.svg" alt="logo" class="logo" id="logo">
		<nav> 
			<ul class="menu">
				<li>
					<a href="index.php">home</a>
				</li>
				<li>
					<a href="#">Hisory</a>
				</li>
				<li>
					<a href="#">ELECTRIC</a>
				</li>
				<li>
					<a href="#">Sport</a>
				</li>
				<li>
					<a href="#">Contact</a>
				</li>
			</ul>
		</nav>
		<div id="switcher">
			<i class="indicator"></i>
		</div>
		<?php
			$today = date("F j, Y");
    		echo "<p><a>Today is $today</a></p>";
		?>

		<img src="img/menu.svg" alt="menu" class="b-menu" id="b-menu">
	</header>

	<div class="rent">
		
		<?php
			$data =  mysqli_query($connection, "SELECT * FROM `comments`");
		?>
		<div class="comments">
		<h1>Усі відгуки</h1>
			<?php
				while ($cat = mysqli_fetch_assoc($data)) {
					?>
						<div id = "card">
							<h3><?php echo $cat['name']?></h3>
							<p><?php echo $cat['comment']?></p>
						</div>
					<?php
				}
			?>
		</div>
	</div>

</div>

<footer>
	<img src="img/lightLogo.svg" alt="">
	<div class="licence">
		<p>© 2022. "Porsche Ukraine" LLC. All rights reserved.</p>
		<div class="ico">
			<img src="img/facebook.svg" alt="">
			<img src="img/twitter.svg" alt="">
			<img src="img/inst.svg" alt="">
		</div>
	</div>
</footer>


</body>
</html>