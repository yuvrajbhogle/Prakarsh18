<?php

	$connection = mysqli_connect('localhost', 'prakarsh_abc', 'rajpatel1234');
	if (!$connection){
		die("Database Connection Failed" . mysqli_error($connection));
	}
	$select_db = mysqli_select_db($connection, 'prakarsh_hello');
	if (!$select_db){
		die("Database Selection Failed" . mysqli_error($connection));
	}
?>