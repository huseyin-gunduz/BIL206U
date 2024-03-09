<?php
// while döngüsü - koşul(switch)

// Bir dizi oluşturalım
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Toplamı saklamak için bir değişken oluşturalım
$total = 0;

// Dizideki her bir sayıyı toplama ekleyerek switch ve while döngüsü kullanma
$index = 0; // İndeks değerini başlatma
$length = count($numbers); // Dizinin uzunluğunu alıyoruz

while ($index < $length) {
    switch ($numbers[$index]) {
        case 2:
            break;
        case 4:
            break;
        case 6:
            break;
        case 8:
        case 10:
            $total += $numbers[$index];

            echo "index : " . $index . " numbers : " . $numbers[$index] . " toplam: " . $total . "\n";

            break;
        default:
            $index++;
            continue 2; // 2 değeri, iki kat üstündeki döngüyü etkiler
    }

    // Eğer toplam 15'e ulaşırsa, döngüyü durdur
    if ($total >= 15) {
        break;
    }

    $index++;
}

echo "Son toplam: " . $total;
?>
