<?php
// while döngüsü - koşul ifadesi

// Toplamı saklamak için bir değişken oluştur
$total = 0;
// Sayacı başlatma
$counter = 1;

// 1'den 50'ye kadar olan tek sayıları toplamak için while döngüsü kullanma
while ($counter <= 50) {
    if ($counter % 2 != 0) {
        // Eğer sayı tek ise, toplama ekle
        $total += $counter;
    }
    // Sayacı bir artır
    $counter++;
}

// Toplamı ekrana yazdır
echo "1 ile 50 arasindaki tek sayilarin toplami: " . $total;
?>