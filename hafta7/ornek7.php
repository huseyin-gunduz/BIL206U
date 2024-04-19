<?php

// pi(): Pi sayısını döndürür.
echo "Pi sayisi: " . pi() . "\n";

// abs(): Mutlak değeri döndürür.
$number = -10;
echo "-10 sayisinin mutlak değeri: " . abs($number) . "\n";

// pow(): Bir sayının üssünü hesaplar.
$base = 2;
$exponent = 3;
echo "$base üzeri $exponent: " . pow($base, $exponent) . "\n";

// sqrt(): Bir sayının karekökünü hesaplar.
$number = 16;
echo "16 sayisinin karekök degeri: " . sqrt($number) . "\n";

// ceil(): Bir sayının tavanını döndürür.
$number = 4.3;
echo "4.3 sayisinin tavan degeri: " . ceil($number) . "\n";

// floor(): Bir sayının tabanını döndürür.
$number = 4.7;
echo "4.7 sayisinin taban degeri: " . floor($number) . "\n";

// round(): Bir sayıyı yuvarlar.
$number = 4.5;
echo "4.5 sayisinin yuvarlanmiş hali: " . round($number) . "\n";

$number = -4.5;
echo "-4.5 sayisinin yuvarlanmiş hali: " . round($number) . "\n";

$number = 4.56789;
echo "4.56789 sayisinin 2 basamak hassasiyetinde yuvarlanmiş hali: " . round($number, 2) . "\n";

$number = -4.56789;
echo "-4.56789 sayisinin 2 basamak hassasiyetinde yuvarlanmiş hali: " . round($number, 2) . "\n";

$number = 4.4;
echo "4.4 sayisinin yuvarlanmiş hali: " . round($number) . "\n";

$number = 6.54321;
echo "6.54321 sayisinin 2 basamak hassasiyetinde yuvarlanmiş hali: " . round($number, 2) . "\n";

$number = -6.54321;
echo "-6.54321 sayisinin 2 basamak hassasiyetinde yuvarlanmiş hali: " . round($number, 2) . "\n";


// Bir dizi içindeki tüm sayıları yuvarlama
$numbers = [4.3, 5.8, 6.2, 7.5];
echo "[ 4.3, 5.8, 6.2, 7.5 ] dizinin yuvarlanmiş hali: [ ";
foreach ($numbers as $num) {
    echo round($num) . " ";
}

echo "]\n";

// min(): Verilen değerlerin en küçüğünü döndürür.
$numbers = [2, 5, 1, 8, 3];
echo "[2, 5, 1, 8, 3] dizisinde en küçük değer: " . min($numbers) . "\n";

// max(): Verilen değerlerin en büyüğünü döndürür.
$numbers = [2, 5, 1, 8, 3];
echo "[2, 5, 1, 8, 3] dizisinde en büyük değer: " . max($numbers) . "\n";

?>
