<?php
// do-while break ve continue

// Başlangıç değeri
$i = 0;

// Do-while döngüsü
do {
    // Eğer $i değeri 3 ise döngüyü atla
    if ($i == 3) {
        $i++;
        continue;
    }

    // Eğer $i değeri 5 ise döngüyü sonlandır
    if ($i == 5) {
        break;
    }

    echo "Sayi: " . $i . "\n";
    $i++;
} while ($i < 10);
?>
