<?php
function faktoriyel($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * faktoriyel($n - 1);
    }
}

// Faktöriyel hesaplamak için fonksiyonu çağıralım
$sonuc = faktoriyel(5);
echo "5 faktöriyeli: $sonuc"; // Çıktı: 120
?>
