<?php
// Switch deyimi

// Kullanıcıdan alınan seçenek
$secenek = 2;

// Switch deyimi ile seçeneklerin değerlendirilmesi
switch ($secenek) {
    case 1:
        $yemek = "Pizza";
        $fiyat = 20;
        break;
    case 2:
        $yemek = "Hamburger";
        $fiyat = 15;
        break;
    case 3:
        $yemek = "Salata";
        $fiyat = 10;
        break;
    case 4:
        $yemek = "Makarna";
        $fiyat = 18;
        break;
    case 5:
        $yemek = "Çorba";
        $fiyat = 8;
        break;
    default:
        echo "Geçersiz seçenek!";
}

if (isset($yemek)) {
    echo "Siparişiniz: $yemek, fiyati $fiyat TL";
}
?>
