<?php
// Dosya yolunu belirtin
$dosya_yolu = "veriler.txt";

// Dosyayı aç
$dosya = fopen($dosya_yolu, "r");

// Liste başlat
echo "<ul>";

// Dosyanın sonuna kadar oku ve her satırı işle
while(!feof($dosya)) {
    // Bir satırı oku
    $satir = fgets($dosya);
    
    // Satırı liste öğesi olarak ekrana yazdır
    echo "<li>$satir</li>";
}

// Liste sonlandır
echo "</ul>";

// Dosyayı kapat
fclose($dosya);
?>