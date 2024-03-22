<?php

$sepet = array(
    array("urun" => "Telefon", "fiyat" => 1200, "miktar" => 2),
    array("urun" => "Laptop", "fiyat" => 2500, "miktar" => 1),
    array("urun" => "Tablet", "fiyat" => 800, "miktar" => 3)
);

$toplam_fiyat = 0;

foreach ($sepet as $urun) 
{
    switch ($urun['urun']) 
    {
        case "Telefon":
            $toplam_fiyat += $urun['fiyat'] * $urun['miktar'];
            break;
        case "Laptop":
            $toplam_fiyat += $urun['fiyat'] * $urun['miktar'];
            break;
        case "Tablet":
            $toplam_fiyat += $urun['fiyat'] * $urun['miktar'];
            break;
        default:
            echo "Geçersiz ürün!";
    }
}

echo "Sepetinizdeki Ürünlerin Toplam Fiyati: $" . number_format($toplam_fiyat, 2);

?>
