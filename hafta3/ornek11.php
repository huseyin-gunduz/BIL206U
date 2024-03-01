<?php
// Çok Boyutlu Diziler

// Çok boyutlu bir dizi oluşturma
$matris = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Dizinin elemanlarına erişim
echo "Matrisin ikinci satirinin üçüncü elemani: " . $matris[1][2] . "\n"; // Çıktı: 6

// Dizinin elemanlarını ekrana yazdırma
echo "Matris:\n";
foreach ($matris as $satir) {
    foreach ($satir as $eleman) {
        echo $eleman . " ";
    }
    echo "\n";
}
?>