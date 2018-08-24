<?php
  require_once('verbinding.php');
  include('config.php');
  include('recaptchalib.php');
  $response = null;
  $reCaptcha = new ReCaptcha($secret);
  if(isset($_POST) & !empty($_POST)){

    if($_POST['g-recaptcha-response']){
      $response = $reCaptcha->verifyResponse(
        $_SERVER['REMOTE_ADDR'],
        $_POST['g-recaptcha-response']
      );
    }
    if($response != null && $response->success){
        $username			     = mysqli_real_escape_string($conn, $_POST['rusername']);
        $email			       = mysqli_real_escape_string($conn, $_POST['remail']);
        $password	         = ($_POST['rpassword']);
        $passwordagain	   = ($_POST['rpassword_2']);
        if($password == $passwordagain)
        { //check double entries voor email
        $usernamesql = "SELECT * FROM `users` WHERE username='$username'";
        $usernameres = mysqli_query($conn, $usernamesql);
        $count = mysqli_num_rows($usernameres); //if count equals to 1 then we are not oging to insert this data  mysqlinumrows expects 1 argument
        if($count == 1){
        echo $fmsg = "Email exists in onze database";
        }
        $emailsql = "SELECT * FROM `users` WHERE email='$email'";
        $emailres = mysqli_query($conn, $emailsql);
        $emailcount = mysqli_num_rows($emailres); //if count equals to 1 then we are not oging to insert this data  mysqlinumrows expects 1 argument
        if($emailcount == 1){
        echo $fmsg = "Email exists in onze database, please reset je wachtwoord";
        }
        $sqltest 	= "INSERT INTO `users` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result 		= mysqli_query($conn, $sqltest) or die(mysqli_error($conn)); //is used to put it in to database table ? die ik nu in een result $variabel stop
        if($result)
        {
        echo $smsg = "Registratie succes
        ";
        header('Location: regsucces.php');

        }else
        {
        echo $fmsg = "Password dont match";
        }
        }
        }
        echo "Registration failed back to register form <a href='register.php'> Click here </a>";

    } else {
      echo "submit again";

    }



?>
