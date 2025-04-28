<?php 
   
// explode() ile bir metni belirli bir ayraçla bölmek
$cumle = "PHP'de 1000 uzerinde yerlessik fonksiyon vardir";    
$parts = explode(" ", $cumle);
echo "Metnin parçalari: ";
print_r($parts);

// str_replace() ile bir metindeki belirli bir alt dizini değiştirmek
$cumle = "Bugun hava gunesli.";
$yeni_cumle = str_replace("gunesli", "yagmurlu", $cumle);
echo "Yeni metin: " . $yeni_cumle . "\n";

echo "\n";

// str_word_count() ile bir metindeki kelime sayısını bulmak
$cumle = "Merhaba dunya!";
$wordCount = str_word_count($cumle);
echo "Metindeki kelime sayisi: " . $wordCount . "\n";

echo "\n";

// strtoupper() ile bir metindeki harfleri büyük harfe çevirmek
$cumle = "merhaba dunya!";
$uppercaseString = strtoupper($cumle);
echo "Buyuk harflerle metin: " . $uppercaseString . "\n";

echo "\n";

// strlen() ile bir metinin uzunluğunu bulmak
$cumle = "Merhaba dunya!";
$length = strlen($cumle);
echo "Metnin uzunluğu: " . $length . "\n";

echo "\n";

// strrev() ile bir metni tersine çevirmek
$cumle = "Merhaba dunya!";
$reversedString = strrev($cumle);
echo "Tersine çevrilmis metin: " . $reversedString . "\n";

echo "\n";

// strpos() ile bir metinde belirli bir alt dizinin konumunu bulmak
$cumle = "Merhaba dunya!";
$position = strpos($cumle, "dunya");
echo "Aranan alt dizi 'dunya' metindeki konumu: " . $position . "\n";

echo "\n";

// str_split() ile bir metni karakter dizisine bölmek
$cumle = "Merhaba";
$chars = str_split($cumle);
echo "Metnin karakter dizileri: ";
print_r($chars);

?>