<?php
session_start();
require_once('verbinding.php');
print_r($_SESSION);
if(isset($_SESSION['username']) & !empty($_SESSION['username']))
{
  echo "already logged in";
  echo "  " . $_SESSION['username'];
}
if(isset($_POST) & !empty($_POST))
{
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = ($_POST['password']);
  $sql = "SELECT * FROM `users` WHERE ";
if(filter_var($username, FILTER_VALIDATE_EMAIL)){ //hiermee herkent hij ook de email
  $sql .= "email='$username'"; //concatenation dit plakt aan de code ik snap dat niet helemaal nog ... meer mee oefenen.
} else { //ffbeter dezecode beheersen
  $sql .= "username='$username'";
}
$sql .= " AND password='$password'";
$sql;
 $lres = mysqli_query($conn, $sql); //put it in a array toch ?
echo   $count = mysqli_num_rows($lres); //verwacht 1 dacht ik
echo var_dump($_SESSION);
  if($count == 1)
{
  echo "User is logged in $username";
$_SESSION['username'] = $username;
}
else
{
  echo "User does not exists, please register first!";
}
}

  ?>
