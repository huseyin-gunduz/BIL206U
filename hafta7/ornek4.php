<?php
$globalDegisken = 10;

function fonksiyon() {
    global $globalDegisken;
    echo "Global değişkenin değeri: $globalDegisken \n";
}

// Fonksiyonu çağıralım
fonksiyon();

// Global değişkenin değerini değiştirelim
$globalDegisken = 20;

// Değişen değeri kontrol edelim
echo "Değişen değer: $globalDegisken";
?>
