
<?php

$value1 = 10;
$value2 = "hello";
$value3 = [1, 2, 3];
$value4 = true;
$value5 = 3.14;

// is_int() kullanımı
echo "Value1 integer mi? " . (is_int($value1) ? "Evet" : "Hayir") . "\n";

// is_string() kullanımı
echo "Value2 string mi? " . (is_string($value2) ? "Evet" : "Hayir") . "\n";

// is_array() kullanımı
echo "Value3 array mi? " . (is_array($value3) ? "Evet" : "Hayir") . "\n";

// is_bool() kullanımı
echo "Value4 boolean mi? " . (is_bool($value4) ? "Evet" : "Hayir") . "\n";

// is_float() kullanımı
echo "Value5 float mi? " . (is_float($value5) ? "Evet" : "Hayır") . "\n";

?>

