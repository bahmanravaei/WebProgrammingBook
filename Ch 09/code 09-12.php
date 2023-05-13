<?php
$finaldir = 'download';
$finished = false; // we're not finished yet (we just started)
while ( ! $finished ){ // while not finished
$rn = rand(); // random number
$outfile = $finaldir.'/'.$rn.'.gif'; // output file name
if ( ! file_exists($outfile) ) // if file DOES NOT exist...
$finished = true; // ...we are finished
} // (if not finished, re-start WHILE loop)
?>