<?php

// Koşulların değerlendirilmesi
$expr1 = (5 < 10) && (10 > 3); // Doğru mu? (True / False)
$expr2 = (5 > 10) || (10 < 3); // Doğru mu? (True / False)
$expr3 = !(5 == 10);           // Doğru mu? (True / False)

// Sonuçların ekrana yazdırılması
echo "expr1: " . ($expr1 ? "True" : "False") . "\n";
echo "expr2: " . ($expr2 ? "True" : "False") . "\n";
echo "expr3: " . ($expr3 ? "True" : "False") . "\n";
?>
