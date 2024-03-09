<?php
// while döngüsü - dizi

// Bir dizi oluşturalım
$numbers = array(10, 20, 30, 40, 50);

// Dizideki her bir elemanı yazdırmak için while döngüsü kullanma
$index = 0; // İndeks değerini başlatma
$length = count($numbers); // Dizinin uzunluğunu alıyoruz

while ($index < $length) {
    echo "Eleman " . ($index + 1) . ": " . $numbers[$index] . "\n";
    $index++;
}
?>
