<?php
// Mantıksal Operatörler

// değişkenlerin tanımı
$degisken1 = 5;
$degisken2 = 10;
$degisken3 = 5;

// "ve" operatörü (&&)
if ($degisken1 == $degisken3 && $degisken1 < $degisken2) {
    echo "Her iki koşul da doğru.\n";
} else {
    echo "En az bir koşul yanliş.\n";
}

// "veya" operatörü (||)
if ($degisken1 == $degisken3 || $degisken1 > $degisken2) {
    echo "En az bir koşul doğru.\n";
} else {
    echo "Her iki koşul de yanliş.\n";
}

// "değil" operatörü (!)
if (!($degisken1 == $degisken2)) {
    echo "Değişken1 ve Değişken2 eşit değil.\n";
} else {
    echo "Değişken1 ve Değişken2 eşit.\n";
}

// "xor" operatörü
$degisken4 = false;
$degisken5 = true;

if ($degisken4 xor $degisken5) {
    echo "Sadece bir koşul doğru.\n";
} else {
    echo "Hiçbir koşul veya her ikisi doğru ya da yanliş.\n";
}

?>