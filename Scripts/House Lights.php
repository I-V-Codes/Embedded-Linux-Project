<!DOCTYPE html>
<html>
<head>
<title>
Ivan's Embedded Linux Project
</title>   
</head>
<body>
<h1>House Lights</h1>
<p>
	Here you can monitor the lights in your house to see if and when they were turned on.
</p> 
 	print "<table border=1>";  <!--Table created-->
	print "<tr><td>Status</td><td>DateAndTimestamp</td></tr>";
<?php
try{
	$db = new PDO('sqlite:/home/pi/files/school/Projects/Embedded/data/LED_DB'); //accessing LED_DB
	if ($db == false)
	{
			die("Unable to connect to Sqlite3 DataBase<br>");
	}

	$result = $db->query('SELECT * FROM LED_STATUS'); //querying database
	foreach($result as $row)   //dispaying database row by row onto website through the table created earlier
	{
	   print "<tr><td>".$row['Status']."</td>";
	   print "<td>".$row['DateAndTimestamp']."</td></tr>";
	}
	print "</table>";

	$db = NULL;  //close database
	}
	catch(PDOEception $e)
	{
	  print 'Exception : '.$e->getMessage();
	}
?>

</body>
</html>
