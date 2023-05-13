<?php
$ourFileName = "testFile.txt";
$fh = fopen($ourFileName, 'X') or die("Can't open file");
fclose($fh);
?>