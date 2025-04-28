<?php

// User sınıfını dahil edelim
include 'User.php';

// Bir kullanıcı örneği oluşturalım
$user = new User("Ad Soyad", "adsoyad@example.com");

// Kullanıcı bilgilerini görüntüleyelim
echo $user->getInfo();
?>
