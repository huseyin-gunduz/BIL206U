<?php

// Kullanıcı bilgilerini içeren bir dizi tanımlama
$user = array(
    "name" => "Ali",
    "age" => 20,
    "email" => "ali@example.com",
    "country" => "Turkiye"
);

// Kullanıcı bilgilerini ekrana yazdırmak için döngü kullanma
echo "Kullanici Bilgileri: \n";

foreach ($user as $key => $value) 
{
    echo ucfirst($key) . ": " . $value . "\n"; // Dizinin anahtarlarını büyük harfle başlatma
}
?>
