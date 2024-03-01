<?php
//Şart İfadeleri

// Öğrenci bilgilerini tanımlayalım
$ogrenci_adi = "Ahmet";
$ogrenci_notu = 40;
$ogrenci_devamsizlik = 5;

// Eğer-elseif-else bloğu ile öğrencinin durumunu belirleyelim
if ($ogrenci_notu >= 70 && $ogrenci_devamsizlik < 5) {
    echo $ogrenci_adi . " dersi başariyla geçti.";
} elseif ($ogrenci_notu >= 50 && $ogrenci_devamsizlik < 5) {
    echo $ogrenci_adi . " dersi geçti ancak biraz zorlandi.";
} elseif ($ogrenci_notu >= 50 && $ogrenci_devamsizlik >= 5) {
    echo $ogrenci_adi . " dersi geçti ancak devamsizlik problemi var.";
} else {
    echo $ogrenci_adi . " dersi geçemedi.";
}
?>