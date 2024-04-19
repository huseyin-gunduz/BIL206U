<?php

// intval
$value1 = "123";
$value2 = 3.14;
$value3 = 042;  // 8^1*4 + 8^0*2 = 34
$value4 = false;
$value5 = "abc";
$value6 = "+42";


// Değerlerin integer'a dönüştürülmesi
$result1 = intval($value1); 
$result2 = intval($value2); 
$result3 = intval($value3); 
$result4 = intval($value4); 
$result5 = intval($value5); 
$result6 = intval($value6); 


echo "Değer 1: " . $result1 . "\n";
echo "Değer 2: " . $result2 . "\n";
echo "Değer 3: " . $result3 . "\n";
echo "Değer 4: " . $result4 . "\n";
echo "Değer 5: " . $result5 . "\n";
echo "Değer 6: " . $result6 . "\n";


echo "\n";


// boolval
$value1 = 123;
$value2 = 0;
$value3 = "true";
$value4 = "";
$value5 = [];

// Değerlerin boolean değerlere dönüştürülmesi
$result1 = boolval($value1); 
$result2 = boolval($value2); 
$result3 = boolval($value3); 
$result4 = boolval($value4); 
$result5 = boolval($value5); 

echo "Değer 1: " . ($result1 ? 'true' : 'false') . "\n";
echo "Değer 2: " . ($result2 ? 'true' : 'false') . "\n";
echo "Değer 3: " . ($result3 ? 'true' : 'false') . "\n";
echo "Değer 4: " . ($result4 ? 'true' : 'false') . "\n";
echo "Değer 5: " . ($result5 ? 'true' : 'false') . "\n";

echo "\n";

// stringval
$value1 = 123;
$value2 = true;

// Değerlerin string olarak dönüştürülmesi
$result1 = strval($value1); 
$result2 = strval($value2); 

echo "Değer 1: " . $result1 . "\n";
echo "Değer 2: " . $result2 . "\n";

// floatval
$value1 = "3.14";
$value2 = 123;
$value3 = true;
$value4 = "abc";

// Değerlerin float'a dönüştürülmesi
$result1 = floatval($value1); // 3.14
$result2 = floatval($value2); // 123.0
$result3 = floatval($value3); // 1.0
$result4 = floatval($value4); // 0.0

echo "Değer 1: " . $result1 . "\n";
echo "Değer 2: " . $result2 . "\n";
echo "Değer 3: " . $result3 . "\n";
echo "Değer 4: " . $result4 . "\n";

?>
