<?php

$a = true;
$b = false;

$result = ($a && !$b) || (!$a && $b); // XOR işlemi
// (true && true) || (false && false 

var_dump($result); // Sonuç: true

?>