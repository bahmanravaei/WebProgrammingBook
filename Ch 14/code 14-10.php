<?php
$con = mysql_connect("localhost","peter","abc123");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("my_db", $con);
mysql_query("DELETE FROM Person WHERE LastName='Griffin'");
mysql_close($con);
?>