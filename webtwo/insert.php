<?php

	$con = mysql_connect('localhost','root','norzain');

	if(!$con)	#cek connection
	{
		echo 'Not connected to server';
	}

	if(!mysql_select_db('zebbo',$con))	#pilih database
	{
		echo 'Database not selected';
	}

	$Name = $_POST['username'];
	$Email = $_POST['email'];

	$sql = "INSERT INTO data(Name, Email) VALUES ('$Name','$Email')";

	if(!mysql_query($sql,$con)) 
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("refresh:2; url=main.php");


?>