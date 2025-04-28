<?php
// İlişkisel Diziler

// İlişkisel bir dizi oluşturma
$kisi = array(
    "ad" => "Ahmet",
    "soyad" => "***",
    "yas" => 30,
    "meslek" => "Mühendis"

);

// Dizinin elemanlarına erişim
echo "Adi: " . $kisi["ad"] . "\n"; // Çıktı: Ahmet
echo "Soyadi: " . $kisi["soyad"] . "\n"; // Çıktı: Yılmaz
echo "Yaşi: " . $kisi["yas"] . "\n"; // Çıktı: 30
echo "Mesleği: " . $kisi["meslek"] . "\n"; // Çıktı: Mühendis

// Dizinin elemanlarını ekrana yazdırma
echo "Kişi Bilgileri: \n";
foreach ($kisi as $anahtar => $deger) {
    echo ucfirst($anahtar) . ": " . $deger . "\n"; // Anahtarları büyük harfle başlat
}
?>