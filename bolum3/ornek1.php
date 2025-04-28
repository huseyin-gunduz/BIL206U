<?php
// Değişkenler

// String (Metin) Veri Türü
$ad = "ali";

// Integer (Tam Sayı) Veri Türü
$yas = 25;

// Float (Ondalık Sayı) Veri Türü
$boy = 1.75;

// Boolean (Mantıksal) Veri Türü
$ogrenciMi = false;

// Dizi (Array) Veri Türü
$renkler = array("Kirmizi", "Mavi", "Yeşil");

// Assoziatif Dizi (Associative Array) Veri Türü
$kisi = array("ad" => "Ali", "yas" => 30, "meslek" => "Doktor");

// Null Veri Türü
$degisken = null;

// Değişkenlerin Değerlerini Ekrana Yazdırma
echo "Ad: " . $ad . "\n";
echo "Yas: " . $yas . "\n";
echo "Boy: " . $boy . "\n";
echo "Öğrenci mi? " . ($ogrenciMi ? "evet": "hayir" . "\n") ;
echo "Renkler: " . implode(", ", $renkler) . "\n";
echo "Kişi Bilgileri: \n";
echo "Ad: " . $kisi['ad'] . "\n";
echo "Yaş: " . $kisi['yas'] . "\n";
echo "Meslek: " . $kisi['meslek'] . "\n";
echo "Değişkenin Değeri: " . var_export($degisken, true) . "\n";

?>