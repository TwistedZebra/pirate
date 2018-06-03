
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="description" content="We're pirates cause we arrrrrrrrr">
  		<meta name="keywords" content="Pirates, join">
  		<meta name="author" content="Amer Zahirovic">
		<title>Pirates</title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li>
						<a href="index.php" class="no-active">Home</a>
					</li>
					<li>
						<a href="#join" class="active">Become a pirate!</a>
					</li>
				</ul>
				<div>
					<img src="images/logo.png" alt="">
				</div>
			</nav>
		</header>

		<section class="hero">
			<img id="stars" src="images/stars.png">
			<div id="moon"></div>
			<img id="ship" src="images/ship.png">
			<img id="water" src="images/water.png">
		</section>

		<section class="content">
			<div class="block1">

				<form action="#" method="post">
					<div>
						<label>Make up a pirate name</label>
						<div class="inputholder">
							<input for required type="text" name="name" placeholder="Youre pirate name">
						</div>
					</div>
					<div>
						<label>Give us your email address</label>
						<div class="inputholder">
							<input for required type="email" name="email" placeholder="Your email">
						</div>

						<label>Password</label>
						<div class="inputholder">
							<input for required type="password" name="password" placeholder="Enter your password">
						</div>
					</div>
					<div>
						<button type="submit" name="submit">Let's go to Davy Jones</button>
					</div>
				</form>
			</div>
		</section>

		<footer>
			<img src="images/footer.png" alt="">
		</footer>
	</body>
</html>

