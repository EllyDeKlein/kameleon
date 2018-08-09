<?php
require_once('verbinding.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Kameleon</title>
    <style>.carousel-inner > .item > img { width:100%; height:570px; } </style>

     <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
		<nav class="navbar navbar-dark bg-dark">
	<!-- Navbar content -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="register.php">Register</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="login.php">My Account</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Customer Service</a>
			</li>
		</ul>
	</div>
	<a class="navbar-brand" href="index.php">Kameleon</a>
</nav>
<br><br>
      <div class='jumbotron jumbotron-fluid bg-success text-white text-center' style="background: #aaa;">
        <div class="container">
        <h1> Register for Kameleon</h1>
        <p>Free colors of pay</p>
      </div>
</div>
  <form action="loginscript.php" method="post" > <!--- original is test.php --->
    <h2>Login</h2>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password"  placeholder="Password">
    <button class="btn" type="submit" name="login_btn">Sign in</button>
  </form>
<?php
var_dump($_POST);
 ?>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
