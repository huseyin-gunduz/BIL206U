<?php
// foreach döngüsü

echo "\n";
echo "1. string elemani olan dizi örnegi\n";

// Bir dizi oluşturalım
$colors = array("Kirmizi", "Mavi", "Yeşil", "Sari");

// Dizideki her bir öğeyi yazdıralım
foreach ($colors as $color) {
    echo $color . "\n";
}


echo "\n";
echo "2. integer elemani olan dizi örnegi\n";

// Bir sayı dizisi oluşturalım
$numbers = array(1, 2, 3, 4, 5);

// Dizideki her bir sayıyı iki katıyla çarparak yazdıralım
foreach ($numbers as $number) {
    $result = $number * 2;
    echo $result . "\n";
}



echo "\n";
echo "3. Hem anahtara hem de değere ulaşilan diziler\n";

// Bir dizi oluşturalım
$colors = array("red" => "Kirmizi", "blue" => "Mavi", "green" => "Yeşil");

// Dizideki her bir anahtar ve değere erişelim
foreach ($colors as $key => $value) {
    echo "Anahtar: " . $key . ", Değer: " . $value . "\n";
}

?>
