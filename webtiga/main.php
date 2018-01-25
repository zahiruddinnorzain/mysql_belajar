<html>
<head>
<title>
insert data to mysql and display
</title>
</head>
<body>

<form action="insert.php" method="post">

Name : <input type="text" name="username">
<br/>
Email : <input type="text" name="email">
<br/>

<input type="submit" name="Insert">

</form>

<br>

<center>
	<table>
		<tr><th>ID</th><th>Name</th><th>Email</th></tr>
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


			$query = "SELECT * FROM data";	#Query sql

			$result = mysql_query($query,$con);
			

			if($result === FALSE) { 	#cek result
    			die(mysql_error()); 	# TODO: better error handling
			}

			while($row = mysql_fetch_array($result)){		# show to html
				echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td></tr>";
			}
		?>
	</table>
</center>

</body>
</html>