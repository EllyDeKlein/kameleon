<?php
require_once('verbinding.php');
$username = $_POST['username'];
$usernamesql = "SELECT * FROM `users` WHERE username='$username'";
$usernameres = mysqli_query($conn, $usernamesql);
$count = mysqli_num_rows($usernameres); //if count equals to 1 then we are not oging to insert this data  mysqlinumrows expects 1 argument
if($count == 1)
{
  echo "Username Not Available";
} else {
  echo "Username Available";
}
?>
