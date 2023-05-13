<?php
$one = array("10", "20", "30", "40");
$two = array("a", "b", "c", "d");
$i=0;
while($i < count($one)) {
reset($two);
while($a = each($two)) {
echo $a[1]." - ".$one[$i]."<br /> ";
}
echo "<hr />";
$i++;
}
?>