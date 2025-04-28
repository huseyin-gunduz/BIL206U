<?php
// while döngüsü - dizi - koşul

// Bir dizi oluşturalım
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Dizideki her bir çift sayıyı yazdırmak için while döngüsü kullanma
$index = 0; // İndeks değerini başlatma
$length = count($numbers); // Dizinin uzunluğunu alıyoruz

while ($index < $length) {
    // Eğer sayı tekse, devam et
    if ($numbers[$index] % 2 != 0) {
        $index++;
        //continue;
    }

    // Eğer sayı 6 ise döngüyü sonlandır
    if ($numbers[$index] == 8) {
        break;
    }

    echo "Çift sayi: " . $numbers[$index] . "\n";
    $index++;
}
?>
