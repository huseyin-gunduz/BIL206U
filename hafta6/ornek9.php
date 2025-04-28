<?php

// Örnek bir dizi oluşturalım
$colors = ['Red', 'Green', 'Blue', 'Yellow'];

// reset() fonksiyonu ile dizinin başına gidilir
reset($colors);

// current() fonksiyonu ile şu anki eleman alınır
echo "Şu anki eleman: " . current($colors) . "\n";

// next() fonksiyonu ile bir sonraki elemana geçilir
next($colors);
echo "Bir sonraki eleman: " . current($colors) . "\n";

// next() fonksiyonu ile bir sonraki elemana geçilir
next($colors);
echo "Bir sonraki eleman: " . current($colors) . "\n";

// prev() fonksiyonu ile bir önceki elemana geçilir
prev($colors);
echo "Bir önceki eleman: " . current($colors) . "\n";

// reset() fonksiyonu ile dizinin başına gidilir
reset($colors);
echo "Başa dönülmüş eleman: " . current($colors) . "\n";

?>
