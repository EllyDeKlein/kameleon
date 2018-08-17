<?php require_once('verbinding.php') ?>
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
        <a class="nav-link" href="about.php">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="customerservice.php">Customer Service</a>
      </li>
    </ul>
  </div>
  <a class="navbar-brand" href="index.php">Kameleon</a>
</nav>
<h5> Contact us! </h5>
<p> Do you have suggestions ? Questions ? Or any feedback at all? Please do not hesitate to contact us !</p>
      <form action='registersubmit.php' method='POST' enctype="multipart/form-data">
            <div class="test">
              <label>E-mail</label> <input type='text' name='customeremail' value=''><br>
            </div> <!--- id = username is voor de jquery voor de username check functie --->
            <div class="test">
              <label>Message</label> <input type='text' name='customermessage' value=''><br>
            </div> <!--- id = username is voor de jquery voor de username check functie --->
              <input type='submit' name='save' class='knop'><br>
            </div>
      </form>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
