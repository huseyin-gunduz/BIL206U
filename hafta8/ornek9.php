<?php
// Bir dizideki en küçük değeri bulan fonksiyon
function min_bulma($array) {
    // Dizinin ilk elemanını en küçük olarak varsayalım
    $min_value = $array[0];

    // Dizi boyunca döngü yaparak en küçük değeri bulalım
    foreach ($array as $value) {
        if ($value < $min_value) {
            $min_value = $value;
        }
    }

    // En küçük değeri geri döndürelim
    return $min_value;
}

// Fonksiyonu kullanarak en küçük değeri bulma
$numbers = array(5, 3, 8, 1);
$min_value = min_bulma($numbers);
echo "En küçük değer: " . $min_value; // Çıktı: En küçük değer: 1
?>
