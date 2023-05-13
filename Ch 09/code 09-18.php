<?php
for ($i=0; $i<10000; $i++)
$a[$i]=$i*2;
echo "list time: \n".$start=mktime()."<br />";
for ($i=0; $i<1000; $i++)
{
reset($a);
while(list($k, $v)=each($a))
{
echo "";
}
}
echo ($finish=mktime())."<br />";
$result=$finish-$start;
echo "Result: $result seconds<br /><br />";
echo "for time: \n".$start=mktime()."<br />";
for ($i=0; $i<1000; $i++)
{
foreach($a as $k => $v)
{
echo "";
}
}
echo ($finish=mktime())."<br />";
$result=$finish-$start;
echo "Result: $result seconds<br /><br />";
?>