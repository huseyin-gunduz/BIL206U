<?php
// Dizi tanımlanıyor
$numbers = array(0, 1, 2, 3, 4, 5, 7, 9);

// For döngüsü ile dizi üzerinde dön
for ($i = 0; $i < count($numbers); $i++) {
    $number = $numbers[$i];

    // switch-case ile sayının kategorisini yaz
    switch ($number) {
        case 0:
            echo "[$i] $number → Sıfır\n";
            break;
        case 1:
            break;
        case 2:
            echo "[$i] $number → Küçük sayı\n";
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            echo "[$i] $number → Orta sayı\n";
            break;
        default:
            echo "[$i] $number → Bilinmiyor\n";
            break;
    }
}
?>
