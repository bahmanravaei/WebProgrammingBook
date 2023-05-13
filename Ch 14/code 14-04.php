<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("my_db", $con);
mysql_query("INSERT INTO person (FirstName, LastName, Age)
VALUES ('Mehdi', 'Ghafari', '35')");
mysql_query("INSERT INTO person (FirstName, LastName, Age)
VALUES ('Mostafa', 'Bastam', '33')");
mysql_close($con);
?>