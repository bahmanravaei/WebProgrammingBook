<html>
<head>
<title>
Create Select list with while
</title>
</head>
<body>
<?php
$i = 1;
print '<select name="doughnuts">';
for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10) {
print "<option>$min - $max</option>\n";
}
print '</select>';
?>
</body>
</html>