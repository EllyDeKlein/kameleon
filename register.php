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
       <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

       <!---script voor de username availability Jquery en ajax --->
       <script type="text/javascript">
        $(document).ready(function() {
          $('#usernameLoading').hide(); //als document site ready is , dus letterlijk gewoon aan actief, dan hide het laad logo
          $('#username').keyup(function(){ //onkeyup als er iets ingetoest word laat hij het laad logo gewoon weer zien .
            $('#usernameLoading').show(); //show
              $.post("check.php", { // de info word gestuurd naar check.php
                username: $('#username').val() //verwijzng naar de id username in het formulier
              }, function(response){
                $('#usernameResult').fadeOut();
                setTimeout("finishAjax('usernameResult', '"+escape(response)+"')", 400);
              });
              return false;
          });
        });
        function finishAjax(id, response) {
          $('#usernameLoading').hide();
          $('#'+id).html(unescape(response));
          $('#'+id).fadeIn();
        }
       </script>
   </script>
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
</nav><br><br>
<!--- cards --->
<div class="container">
<!--- cards --->
<div class="card-deck">
  <div class="card">
    <img class="card-img-top img-fluid" src="Logo.svg" alt="Card image cap">

</div>
  </div>
  <h1 id='about'> Register with Kameleon ! </h1>
<br><br>
    <form action='sqlregister.php' method='POST' enctype="multipart/form-data">
          <div class="test">
            <b>Register here</b><br>
            <label>Username</label> <input type='text' id='username' name='rusername' value=''><br>
          </div>
            <span id="usernameLoading"><img src="loading.gif" alt="Ajax Indicator" /></span>
            <span id="usernameResult"></span>
          <div class="test">
            <label>Email</label> <input type='text' name='remail' value=''><br>
          </div>
          <div class="test">
            <label>Password</label> <input type='password' name='rpassword' value=''><br>
          </div>
          <div class="test">
            <label>Confirm password</label>
            <input type="password" name='rpassword_2'>
          </div>
          <div class="test">
            <input type='submit' name='submit' class='knop'><br>
          </div>
    </form>
    <a href="index.php" class="button5">Back to home</a>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  <footer>
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
  <a class="navbar-brand" href="register.php">Register</a>
  <a class="navbar-brand" href="transferpanel.php">My Account</a>
  <a class="navbar-brand" href="about.php">About Us</a>
</nav>
  </footer>
</html>
