<?php
		//session_start();
		//verbinding met de database
		$conn = mysqli_connect("localhost", "phpmyadmin", "", "kameleon");
		//mysqli_select_db(connection, blog)
if (!$conn)
{
die("Er zijn problemen met het verbinden aan de database: " . mysqli_connect_error());
}
	//als ik het goed begrijp is Base Url  verwijzing voor verschillende OS-es
		//define 	('ROOT_PATH', realpath(dirname(__FILE__)));
define	('BASE_URL', 'http://localhost/');
	?>
