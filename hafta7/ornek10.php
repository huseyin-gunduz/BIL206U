<?php

// Birinci dizi
$numbers1 = [3, 7, 1, 9, 5];

// İkinci dizi
$numbers2 = [2, 8, 4, 6, 10];

// sizeof() ile dizinin eleman sayısını bulma
$count1 = sizeof($numbers1);
$count2 = sizeof($numbers2);

echo "İlk dizi eleman sayisi: " . $count1 . "\n";
echo "İkinci dizi eleman sayisi: " . $count2 . "\n";

// array_merge() ile iki diziyi birleştirme
$mergedArray = array_merge($numbers1, $numbers2);

echo "Birleştirilmiş dizi: ";
print_r($mergedArray);

// sort() ile diziyi sıralama
sort($mergedArray);

echo "Siralanmiş dizi: ";
print_r($mergedArray);

?>
