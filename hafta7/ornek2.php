<?php
// Dizi içindeki sayıların toplamını ve ortalamasını hesaplayan fonksiyon
function diziToplamOrtalama($dizi) {
    // Dizideki tüm sayıların toplamını bulur
    $toplam = array_sum($dizi); 

    // Dizideki eleman sayısını bulur
    $adet = count($dizi); 

    // Toplamı eleman sayısına böler ve ortalamayı bulur
    $ortalama = $toplam / $adet; 
    return array("toplam" => $toplam, "ortalama" => $ortalama);
}
function kendi_array_sum($dizi) {
    // Toplamı saklamak için bir değişken oluşturuyoruz
    $toplam = 0; 

    // Dizideki her bir elemanı toplama ekliyoruz
    foreach ($dizi as $eleman) {
        $toplam += $eleman;
    }
    // Toplamı döndürüyoruz
    return $toplam; 
}

// Bir dizi oluşturalım
$sayilar = array(10, 20, 30, 40, 50);

// Fonksiyonu kullanarak dizi içindeki sayıların toplamını ve ortalamasını bulalım
$sonuclar = diziToplamOrtalama($sayilar);
echo "Toplam: " . $sonuclar['toplam'] . "\n";
echo "Ortalama: " . $sonuclar['ortalama'];
?>
