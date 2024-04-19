<?php
// Basit bir toplama fonksiyonu
function toplama($sayi1, $sayi2) {
    $toplam = $sayi1 + $sayi2;
    return $toplam;
}

// Fonksiyonu kullanarak toplama işlemi yapalım
$sayi1 = 5;
$sayi2 = 3;
$sonuc = toplama($sayi1, $sayi2);
echo "Toplam: " . $sonuc;
?>
