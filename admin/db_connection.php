<?php 
	$dbconnection = mysqli_connect('localhost', 'root', '', 'virtuablog');
	mysqli_set_charset($dbconnection, "utf8");
	if (!$dbconnection)
	{
		die("Could not connect: " . mysqli_connect_error());
	}
 ?>