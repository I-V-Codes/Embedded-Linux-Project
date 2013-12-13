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
 
<?php
try{
	$db = new PDO('sqlite:/home/pi/files/school/Projects/Embedded/data/LED_DB');

	echo "<table border=1>";
	echo "<tr><td>Status</td><td>Date&Time</td></tr>";
	$result = $db->query('SELECT * FROM LED_STATUS');
	foreach($result as $row)
	{
	   
	   echo "<tr><td>".$row['Status']."</td>";
	   echo "<td>".$row['Date&Time']."</td></tr>";
	}
	print "</table>";

	$db = NULL;
	}
	catch(PDOEception $e)
	{
	  echo 'Exception : '.$e->getMessage();
	}
?>

</body>
</html>
