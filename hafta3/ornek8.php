<?php
// Diziler (String)

// Bir dizi oluşturma
$dizi = array("elma", "armut", "portakal", "muz");

// Dizinin elemanlarına erişim
echo "Dizinin ilk elemani: " . $dizi[0] . "\n"; // Çıktı: elma
echo "Dizinin üçüncü elemani: " . $dizi[2] . "\n"; // Çıktı: portakal

// Dizinin elemanlarını ekrana yazdırma
echo "Dizi elemanlari: ";
foreach ($dizi as $meyve) {
    echo $meyve . ", ";
}
// Çıktı: elma, armut, portakal, muz

// Dizinin uzunluğunu bulma
echo "\nDizinin uzunluğu: " . count($dizi); // Çıktı: 4
?>