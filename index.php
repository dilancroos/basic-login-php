<?php 

session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>OOP Login System</title>

		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		
		
		
		
	</head>
	<body>

		<header>
			<nav>
				<ul class="menu-member">
					<?php
					if (isset($_SESSION['userid'])) {
					 	?>
					 	<li><a href="#"><?php echo $_SESSION['useruid']; ?></a></li>
					 	<li><a href="includes/logout.inc.php" class="header-login-a">LOGOUT</a></li>
					 	<?php 
					 }
					 else
					 {
					 	?>
					 	<li><a href="#">SIGN UP</a></li>
					 	<li><a href="#" class="header-login-a">LOGIN</a></li>
					 	<?php
					 } ?>
				</ul>
			</nav>
		</header>
		
		<section class="container">
			<div class="container">
				<div class="container col s4">
					<h4>SIGN UP</h4>
					<p>Don't have an account? then sign up here!</p>
					<form action="includes/signup.inc.php" method="post">
						<input type="text" name="uid" placeholder="Username">
						<input type="password" name="pwd" placeholder="Password">
						<input type="password" name="pwdrepeat" placeholder="Repeat Password">
						<input type="text" name="email" placeholder="E-mail">
						<br>
						<button type="submit" name="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>SIGN UP</button>
					</form>
				</div>

				<div class="container col s4">
					<h4>LOGIN</h4>
					<form action="includes/login.inc.php" method="post">
						<input type="text" name="uid" placeholder="Username">
						<input type="password" name="pwd" placeholder="Password">
						<br>
						<button type="submit" name="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>LOGIN</button>
					</form>
				</div>
			</div>
		</section>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script> -->
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	</body>
</html>