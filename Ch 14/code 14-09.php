<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("my_db", $con);
mysql_query("UPDATE Person SET Age = '36' WHERE FirstName = 'Peter' AND LastName =
'Griffin'");
mysql_close($con);
?>