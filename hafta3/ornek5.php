<?php
// Karsilastirma Operatörleri

// Değişkenlerin tanimlanmasi 
$sayi1 = 10;
$sayi2 = 5;

// Eşitlik kontrolü
echo "Eşitlik kontrolü: ";
if ($sayi1 == $sayi2) {
    echo "$sayi1 ve $sayi2 eşittir.";
} else {
    echo "$sayi1 ve $sayi2 eşit değildir.";
}
echo "\n\n";

// Eşitlik kontrolü
$sayi3 = 10;
echo "Eşitlik kontrolü:";
if ($sayi1 == $sayi3) {
    echo "$sayi1 ve $sayi3 eşittir.";
} else {
    echo "$sayi1 ve $sayi3 eşit değildir.";
}
echo "\n\n";

// Eşit değil mi kontrolü
echo "Eşit değil mi kontrolü: ";
if ($sayi1 != $sayi2) {
    echo "$sayi1 ve $sayi2 eşit değildir.";
} else {
    echo "$sayi1 ve $sayi2 eşittir.";
}
echo "\n\n";

// Büyüklük kontrolü
echo "Büyüklük kontrolü: ";
if ($sayi1 > $sayi2) {
    echo "$sayi1, $sayi2'ten büyüktür.";
} else {
    echo "$sayi1, $sayi2'den küçüktür veya eşittir.";
}
echo "\n\n";

// Küçüklük kontrolü
echo "Küçüklük kontrolü: ";
if ($sayi1 < $sayi2) {
    echo "$sayi1, $sayi2'den küçüktür.";
} else {
    echo "$sayi1, $sayi2'den büyük veya eşittir.";
}
echo "\n\n";

// Büyük veya eşit mi kontrolü
echo "Büyük veya eşit mi kontrolü: ";
if ($sayi1 >= $sayi2) {
    echo "$sayi1, $sayi2'den büyük veya eşittir.";
} else {
    echo "$sayi1, $sayi2'den küçüktür.";
}
echo "\n\n";

// Küçük veya eşit mi kontrolü
echo "Küçük veya eşit mi kontrolü: ";
if ($sayi1 <= $sayi2) {
    echo "$sayi1, $sayi2'den küçük veya eşittir.";
} else {
    echo "$sayi1, $sayi2'den büyüktür.";
}
?>
