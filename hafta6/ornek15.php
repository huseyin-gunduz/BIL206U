<?php

// 19. sorunun çözümü

$a = array();
$a[0][0][0] = 1;  
$a[0][0][1] = 2;  
$a[0][1][0] = 3; 
$a[0][1][1] = 4;  
$a[1][0][0] = 5; 
$a[1][0][1] = 6; 
$a[1][1][0] = 7; 
$a[1][1][1] = 8;

$toplam = 0;
$i = 0;
foreach ($a as $v1) {
     foreach ($v1 as $v2) {
          foreach ($v2 as $v3) {
               $toplam = $toplam + ($a[$i%2][$i%2][$i%2] + $v3);

               echo "v3 = " . $v3 . " " . "\$a[". $i%2 ."][" . $i%2 . "][" . $i%2 . "] = " . $a[$i%2][$i%2][$i%2] . " " . "\$toplam = " . $toplam . "\n";
               $i++;  
          }  
     }
}
echo "\$Toplam = " . $toplam;
?>
