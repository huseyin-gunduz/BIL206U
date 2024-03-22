<?php
// Degisken tanimlama

// Kullanıcı bilgilerini içeren değişkenlerin tanımlanması
$username = "Ali";
$age = 20;
$email = "ali@example.com";
$country = "Turkiye";

// Ekrana yazdırmak için metin oluşturulması
$output = "Kullanici adi: " . $username . "\n";
$output .= "Yas: " . $age . "\n";
$output .= "E-posta: " . $email . "\n";
$output .= "Ülke: " . $country . "\n";

// Oluşturulan çıktının ekrana yazdırılması
echo $output;
?>