<?php
	$db_host = 'localhost:3306';
	$db_user = 'i2globrm_onlinejoinacademy';
	$db_password = 'f?.OmGY4.#ys';
	$db_database = 'i2globrm_joinonlineacademy';
	$con = mysqli_connect($db_host, $db_user, $db_password, $db_database);
	if (mysqli_connect_errno())
	{
	die('Could not connect: ' . mysqli_error($con));
	}
?> 

