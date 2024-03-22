<?php

$urunler = array(
    "urun1" => array(
        "ad" => "Telefon",
        "fiyat" => 1200,
        "stok" => 15
    ),
    "urun2" => array(
        "ad" => "Laptop",
        "fiyat" => 2500,
        "stok" => 5
    ),
    "urun3" => array(
        "ad" => "Tablet",
        "fiyat" => 800,
        "stok" => 0
    )
);

echo "Ürünler Listesi:\n";
foreach ($urunler as $urun) {
    echo "Ürün Adi: " . $urun['ad'] . ", Fiyati: " . $urun['fiyat'] . ", Stok: " . $urun['stok'];
    if ($urun['stok'] > 0) {
        echo " - Stokta\n";
    } else {
        echo " - Stokta Yok\n";
    }
}

?>
