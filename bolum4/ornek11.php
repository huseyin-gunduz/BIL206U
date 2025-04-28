<?php
// parametrelerin dışarıda bırakıldığı for döngüsü

echo "Birinci kisim\n";

$i = 0;

for (; $i <= 5; $i++) {
    echo "Sayi: " . $i . "\n";
}

echo "\n";
echo "İkinci kisim\n";

$i = 0;

for (; $i <= 5; ) {
    echo "Sayi: " . $i . "\n";
    $i++;
}
?>
