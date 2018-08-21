<?php
  session_start();
  require_once('verbinding.php');
  $value = $_REQUEST['amount'];
  $touser = $_REQUEST['touser'];
  $fromuser =  $_SESSION['user_id'];
/*
die code hier van net en dan de if else
*/
  $userid = $_SESSION['user_id'];
  $test = "SELECT balance FROM balanceview WHERE user_id=$userid";
  $run = mysqli_query($conn, $test);
  while ($row = $run -> fetch_assoc()) {
    $testwo = $row['balance'];
  }
  if ($testwo > 0) {
  $sql = "INSERT into transactions (from_user, to_user, amount) VALUES ('$fromuser', '$touser','$value')";
  $result 		= mysqli_query($conn, $sql) or die(mysqli_error($conn));
  echo "Sucess!";
}else{
  echo "Failure";
}
?>
