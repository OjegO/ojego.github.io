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
					<a href="contact.php">Contact</a>
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

	<div class="first-screen">
		<div class="offer">
			<h1 id="int">Audi RS6</h1>
			<h2>sportback</h2>
			<div class="text">
				<h3>Шалений і неприборканий</h3>
				<h3>чи незалежний та естетичний?</h3>
				<p>Для Audi RS 6 Sportback правильні обидва варіанти. 
		         Елегантні лінії купеподібного дизайну поєднуються з грубою силою V-подібної «вісімки» TFSI. Насолоджуйтесь відчуттям захвату завдяки відсутності потреби в компромісах.</p>
			</div>
			<div class="btn">
				<a href="Models.html">Детальніше</a>
				<img src="img/strilka-r.svg" alt="">
			</div>
		</div>
		
		<div class="car-img">
			<img src="img/car.webp" alt="car-img">
		</div>
	</div>

	<div class="performance">
		<h1>High performance in numbers</h1>
		<div class="inform">
			<div class="power">
				<h3>Power</h3>
				<div class="data">
					<h6>441</h6>
					<p>kw</p>
				</div>
				<p>(600hp)</p>		
			</div>

			<div class="accel">
				<h3>Acceleration</h3>
				<div class="data">
					<h6>3.6</h6>
					<p>century</p>
				</div>
				<p>0 to 100 km/h</p>
			</div>

			<div class="speed">
				<h3>Speed</h3>
				<div class="data">
					<h6>305</h6>
					<p>km/h</p>
				</div>
				<p>250 km/h (as standart)</p>
			</div>

		</div>
	</div>

	<div class="sound">
		<div class="left">
			<h1>Soundcheck</h1>
			<h2>Audi RS 6 Avant</h2>
			<p>Audi endows the RS6 Avant with a twin-turbocharged 4.0-liter V-8, which generates 591 horsepower and 590 pound-feet of torque. The powerplant combines with a 48-volt hybrid system that's found on other Audi products, such as the A8 luxury sedan and the Q8 crossover.</p>

			<div class="sound-line">
				<img src="img/sound.webp" alt="" id="sound">
			</div>
			
			<div class="btn-engine">
				<a href="#">Start the engine</a>
				<img src="img/play.svg" alt="play">
			</div>

		</div>
		<img class="engine" src="img/engine.webp" alt="Engine">
	</div>

	<div class="rent">
		<div class="add">
			<h1>Залишити відгук</h1>
			<p>Ваш відгук буде доступним для всіх</p>
			<form action="comment.php" method="POST">
				<div>
					<input type="text" name="name" id="name" placeholder="Ім'я"  required>
					<input type="text" name="email" id="email" placeholder="E-mail">
				</div>

				<div id="message">
					<input type="text" name="message" id="message" placeholder="Повідомлення" required>
				</div>
				<button class="btn-rent">
					<a href="#" name = "submit">Підтвердити</a>
					<img src="img/done.svg" alt="play">
				</button>
			</form>	
		</div>
		
		<?php
			$data =  mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 3");
		?>
		<div class="comments">
		<h1>Нещодавні</h1>
			<?php
				while ($cat = mysqli_fetch_assoc($data)) {
					?>
						<div id="card">
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

<script src="js/darkMode.js"></script>
<script src="js/test.js"></script>

</body>
</html>