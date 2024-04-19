<?php
// Varsayılan değerli bir parametreye sahip bir fonksiyon örneği
function selam($isim = "Ziyaretçi") {
    echo "Merhaba, $isim! \n";
}

// Fonksiyonu çağıralım
selam(); // Varsayılan değeri kullanacak
selam("Ahmet"); // Özel bir isimle çağıracağız
selam("Mehmet"); // Bir diğer özel isimle çağıracağız
?>
