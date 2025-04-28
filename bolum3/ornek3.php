<?php
// Sabitler

// Bir sabit tanımlama
define("PI", 3.14);

// Bir sabiti kullanarak daire alanını hesaplama
$yaricap = 5;
$alan = PI * $yaricap * $yaricap;

echo "Dairenin alani: " . $alan;

// Bir sabiti değiştirmeye çalışma (uyarı verecektir)
define("PI", 3.14159);

// Tanımlanan sabitlerin kontrol edilmesi
echo defined("PI") ? "PI sabiti tanimlidir." : "PI sabiti tanimli değildir.";

?>