<?php

// Fonksiyonlar dosyasını dahil etme
$fonksiyonlarDosyasi = 'fonksiyonlar.php';

if (file_exists($fonksiyonlarDosyasi)) {
    require $fonksiyonlarDosyasi;
} else {
    die("Hata: $fonksiyonlarDosyasi dosyasi bulunamadi.");
}

// Dahil edilen dosyalardaki fonksiyonları kullanma
$a = 5;
$b = 3;
$toplam = toplama($a, $b);
$carpim = carpma($a, $b);

echo "Toplam: $toplam\n";
echo "Çarpim: $carpim";
?>
