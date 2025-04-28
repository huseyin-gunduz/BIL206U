<?php
// Kendi strtoupper() fonksiyonunu tanımlama
function my_strtoupper($metin) {
    $buyuk_metin = '';
    $uzunluk = strlen($metin);
    for ($i = 0; $i < $uzunluk; $i++) {
        $karakter = $metin[$i];
        if ($karakter >= 'a' && $karakter <= 'z') {
            // ASCII değerini kullanarak büyük harfe dönüştürme
            $buyuk_metin .= chr(ord($karakter) - 32); 
        } else {
            // Büyük harf olmayan karakterler için aynı karakteri ekleme
            $buyuk_metin .= $karakter; 
        }
    }
    return $buyuk_metin;
}

// Örnek kullanım
$orijinal_metin = "Merhaba Dünya!";
$buyuk_metin = my_strtoupper($orijinal_metin);

// Sonucu ekrana yazdırma
echo "Orijinal metin: $orijinal_metin\n";
echo "Büyük harfli metin: $buyuk_metin";

/*
echo "\n";
echo chr(65);
echo "\n";
echo ord('A');
*/
?>
