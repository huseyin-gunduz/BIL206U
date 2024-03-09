<?php
// while döngüsü

// Faktöriyelini hesaplamak istediğimiz sayı
$number = 5;

// Sonuç için bir değişken oluşturalım ve başlangıç değeri olarak 1 atayalım
$factorial = 1;

// Sayı sıfırdan büyük olduğu sürece döngüyü çalıştır
while ($number > 0) {
    // Faktöriyel hesaplamak için her bir adımda sayıyı $factorial değişkenine çarp
    $factorial *= $number;
    // Sayıyı bir azalt
    $number--;
}

// Sonuçları ekrana yazdır
echo "Faktöriyel: " . $factorial;
?>
