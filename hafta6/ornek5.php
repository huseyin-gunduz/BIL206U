<?php
// Aritmetik Operatörler

// İki sayiyi toplama
$sum = 10 + 5;
echo "Toplama: 10 + 5 = $sum \n";

// İki sayiyi çikarma
$difference = 10 - 5;
echo "Çikarma: 10 - 5 = $difference \n";

// İki sayiyi çarpma
$product = 10 * 5;
echo "Çarpma: 10 * 5 = $product \n";

// İki sayiyi bölme
$quotient = 10 / 5;
echo "Bölme: 10 / 5 = $quotient \n";

// Bir sayinin diğerine bölümünden kalani bulma (Mod işlemi)
$remainder = 10 % 3;
echo "Mod: 10 % 3 = $remainder \n";

// Bir sayinin üssünü alma
$power = 2 ** 3;
echo "Üs alma: 2^3 = $power \n";


// Değişkeni tanimlayalim
$x = 5;

// Değişkeni 1 artirma (artirma operatörü: ++)
$x++;
echo "x arttirildiktan sonra: $x \n";

// Değİşkenİ 1 azaltma (azaltma operatörü: --)
$x--;
echo "x azaltildiktan sonra: $x \n";

// Artirma operatörünü farkli bir şekilde kullanalim
$y = 10;
echo "y: $y \n";
echo "y artirildiktan sonra: " . ++$y . "\n"; // Önce artirma, sonra kullanma
echo "y'nin son değeri: $y \n";

// Azaltma operatörünü farkli bir şekilde kullanalim
$z = 7;
echo "z: $z \n";
echo "z azaltildiktan sonra: " . --$z . "\n"; // Önce azaltma, sonra kullanma
echo "z'nin son değeri: $z \n";
?>
