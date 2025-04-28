<?php

$expr1 = (5 == "5");  // Doğru mu? (True / False)
$expr2 = (5 === "5"); // Doğru mu? (True / False)
$expr3 = (5 != 10);   // Doğru mu? (True / False)
$expr4 = (5 !== "5"); // Doğru mu? (True / False)
$expr5 = (10 > 5);    // Doğru mu? (True / False)
$expr6 = (10 <= 5);   // Doğru mu? (True / False)

echo "expr1: " . ($expr1 ? "True" : "False") . "\n";
echo "expr2: " . ($expr2 ? "True" : "False") . "\n";
echo "expr3: " . ($expr3 ? "True" : "False") . "\n";
echo "expr4: " . ($expr4 ? "True" : "False") . "\n";
echo "expr5: " . ($expr5 ? "True" : "False") . "\n";
echo "expr6: " . ($expr6 ? "True" : "False") . "\n";
?>
