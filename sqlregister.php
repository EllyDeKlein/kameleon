<?php

  require_once('verbinding.php');
  $conn = mysqli_connect("localhost", "phpmyadmin", "", "kameleon");
  echo "connected to database";
  if(isset($_POST) & !empty($_POST))
  {

  $email			       = mysqli_real_escape_string($conn, $_POST['remail']);
  $adres			       = mysqli_real_escape_string($conn, $_POST['radres']);
  $woonplaats        = mysqli_real_escape_string($conn, $_POST['rwoonplaats']);
  $iban              = mysqli_real_escape_string($conn, $_POST['riban']);
  $password	         = ($_POST['rpassword']);
  $passwordagain	   = ($_POST['rpassword_2']);

  if($password == $passwordagain)


  { //check double entries voor email
  $emailsql = "SELECT * FROM `users` WHERE email='$email'";
  $emailres = mysqli_query($conn, $emailsql);
  $count = mysqli_num_rows($emailres); //if count equals to 1 then we are not oging to insert this data  mysqlinumrows expects 1 argument
  if($count == 1){
  echo $fmsg = "Email exists in onze database";
  }
  $emailsql = "SELECT * FROM `users` WHERE email='$email'";
  $emailres = mysqli_query($conn, $emailsql);
  $emailcount = mysqli_num_rows($emailres); //if count equals to 1 then we are not oging to insert this data  mysqlinumrows expects 1 argument
  if($emailcount == 1){
  echo $fmsg = "Email exists in onze database, please reset je wachtwoord";
  }
  $sqltest 	= "INSERT INTO `users` (email, password, adres, woonplaats, iban) VALUES ('$email', '$password', '$adres', '$woonplaats', '$iban')";
  $result 		= mysqli_query($conn, $sqltest) or die(mysqli_error($conn)); //is used to put it in to database table ? die ik nu in een result $variabel stop
  if($result)
  {
  echo $smsg = "Registratie succes";
  /* $id = mysqli_insert_id($conn); */ //to insert id from the database to use
  //$id = mysqli_insert_id($conn);voor later om id mee te geven denk ik
  }else
  {
  echo $fmsg = "Password dont match";
  }
  }
  }
  var_dump($_REQUEST);
?>
