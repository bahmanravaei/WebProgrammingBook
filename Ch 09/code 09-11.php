<html>
<head>
<title>
Create Select list with while
</title>
</head>
<body>
<?php
$i = 1;
print '<select name="people">';
while ($i <= 10) {
print "<option>$i</option>\n";
$i++;
}
print '</select>';
?>
</body>
</html>