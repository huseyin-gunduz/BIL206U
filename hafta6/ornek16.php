<?php

// 20. sorunun çözümü

$n=4;
$toplam=0;
for($i=0;$i<=$n;$i++)
{
    $faktoriyel=1;
    for ($j=1;$j<=$i; $j++)
         $faktoriyel*=$j;

     $toplam+=$faktoriyel;
}
echo "İşlem sonucu: ".$toplam;
?>
