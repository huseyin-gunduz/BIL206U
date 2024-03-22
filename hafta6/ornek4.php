<?php
// Örnek değişkenleri tanımlayalım
$var1 = null;
$var2 = 42;
$var3 = 3.14;
$var4 = "Hello";
$var5 = true;

// Her bir değişkenin türünü kontrol edelim
echo "var1 null mu?     " . (is_null($var1) ? "Evet" : "Hayir") . "\n";
echo "var2 integer mi?  " . (is_int($var2) ? "Evet" : "Hayir") . "\n";
echo "var3 float mi?    " . (is_float($var3) ? "Evet" : "Hayir") . "\n";
echo "var4 string mi?   " . (is_string($var4) ? "Evet" : "Hayir") . "\n";
echo "var5 boolean mi?  " . (is_bool($var5) ? "Evet" : "Hayir") . "\n";
?>
