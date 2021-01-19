<?php
$a = "32"; // string 
settype($a, "integer"); // $a is now integer
echo gettype($a);
echo "<br>";

$b = 32; // integer 
settype($b, "string"); // $b is now string
echo gettype($b);
echo "<br>";
$c = true; // boolean 
settype($c, "integer"); // $c is now integer (1)
echo gettype($c);
echo "<br>";
?>