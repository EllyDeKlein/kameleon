<?php
session_start();
require_once('verbinding.php');

$value = $_REQUEST['amount'];
$touser = $_REQUEST['touser'];
$fromuser = $_SESSION['username'];

$sql = "INSERT into transactions (from_user, to_user, amount) VALUES ('$fromuser', '$touser','$value')";
$result 		= mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo $sql;


echo "$result";

/*


"INSERT INTO `users` (username, email, password) VALUES ('$username', '$email', '$password')";

$updatestatement = mysqli_prepare($conn, "UPDATE users SET balance = (balance - [amount (amount)]) WHERE user = ? AND password = ? ");
*/

/*
UPDATE users SET balance = balance + 50 WHERE id = 1
} */

?>
