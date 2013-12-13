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

$db = new PDO('sqlite:/home/pi/files/school/Projects/Embedded/data/LED_DB');
	if ($db == false)
	{
			die("Unable to connect to Sqlite3 DataBase<br>");
	}
echo "<table border=1>";
echo "<tr><td>Status</td><td>DateAndTime stamp</td></tr>";
$result = $db->query('SELECT * FROM LED_STATUS');

foreach($result as $row)
{
	echo "<tr><td>".$row['Status']."</td>";
	echo "<tr><td>".$row['DateAndTime stamp']."</td></tr>";
}

echo "</table>";

$db = NULL;
?>

</body>
</html>
