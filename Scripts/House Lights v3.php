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

 	print "<table border=1>";
	print "<tr><td>Status</td><td>DateAndTimestamp</td></tr>";

<?php
$db = SQLite3::open('LED_DB.sqlite3');
	if ($db == false)
	{
			die("Unable to connect to Sqlite3 DataBase<br>");
	}
$dbquery = 'SELECT * FROM LED_STATUS'; 
$dbresult = sqlite3_query($db, $dbquery);

while(sqlite_has_more($db, $dbquery))
{
	$dbrow = sqlite_fetch_single($dbquery);
	print_r($dbrow);
}

sqlite_close($db);
?>
print "</table>"
</body>
</html>
