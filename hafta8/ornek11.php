<?php

class Islemler {
    public function topla(...$sayilar) {
        $toplam = 0;
        foreach ($sayilar as $sayi) {
            $toplam += $sayi;
        }
        return $toplam;
    }
}

$islem = new Islemler();

// Farklı sayıda parametrelerle toplama işlemi
echo "Toplam 1: " . $islem->topla(5, 10) . "\n";
echo "Toplam 2: " . $islem->topla(2, 4, 6) . "\n";
echo "Toplam 3: " . $islem->topla(1, 3, 5, 7) . "\n";

?>
