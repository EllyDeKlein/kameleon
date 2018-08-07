<?php

 require_once('verbinding.php');
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
    .row div{padding: 20px 10px;border: 1px solid;}
    </style>
  </head>
  <body>



      <div class='jumbotron jumbotron-fluid bg-success text-white text-center' style="background: #aaa;">

        <div class="container">
        <h1> Register for Kameleon</h1>
        <p>Free colors of pay</p>
      </div>
</div>

<!--- cards --->

<div class="container">

<!--- cards --->
<div class="card-deck">
  <div class="card">
    <img class="card-img-top img-fluid" src="img/Logo.svg" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Login!</h4>
      <p class="card-text"> Or register for free of 1 euro per minuut!</p>
    </div>

  </div>


    <form action='sqlregister.php' method='POST' enctype="multipart/form-data">
          <div class="test">
            <label>E-mail</label> <input type='text' name='remail' value=''><br>
          </div>
          <div class="test">
            <label>Adres</label> <input type='text' name='radres' value=''><br>
          </div>
          <div class="test">
            <label>Woonplaats</label> <input type='text' name='rwoonplaats' value=''><br>
          </div>
          <div class="test">
            <label>IBAN</label> <input type='text' name='riban' value=''><br>
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


<?php

var_dump($_POST);

 ?>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
