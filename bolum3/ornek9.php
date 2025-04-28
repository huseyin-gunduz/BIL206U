<?php
//Diziler (Integer)

// Bir sayısal dizi oluşturma
$sayilar = array(3, 7, 12, 18, 22);

// Dizinin elemanlarına erişim
echo "Dizinin ilk elemani: " . $sayilar[0] . "\n"; // Çıktı: 3
echo "Dizinin üçüncü elemani: " . $sayilar[2] . "\n"; // Çıktı: 12

// Dizinin elemanlarını ekrana yazdırma
echo "Dizi elemanlari: ";
foreach ($sayilar as $sayi) {
    echo $sayi . ", ";
}
// Çıktı: 3, 7, 12, 18, 22

// Dizinin uzunluğunu bulma
echo "\nDizinin uzunluğu: " . count($sayilar); // Çıktı: 5
?>
