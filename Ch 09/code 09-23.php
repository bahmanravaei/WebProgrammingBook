<html>
<head>
<title>
function
</title>
</head>
<body>
<?php
function mySum($numX, $numY){
$total = $numX + $numY;
return $total;
}
$myNumber = 0;
echo "Before the function, myNumber = ". $myNumber ."<br />";
$myNumber = mySum(3, 4); // Store the result of mySum in $myNumber
echo "After the function, myNumber = " . $myNumber ."<br />";
?>
</body>
</html>