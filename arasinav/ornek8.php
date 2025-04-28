<?php
// Verilen sayıları tanımlayalım
$a = 5; // 0101 (2'lik tabanda) 
$b = 3; // 0011 (2'lik tabanda) 

// AND (&) operatörüyle işlem yapalım
$result_and = $a & $b;
echo "AND işlemi: $result_and \n"; // 001 (2'lik tabanda) -> 1 (10'luk tabanda)

// OR (|) operatörüyle işlem yapalım
$result_or = $a | $b;
echo "OR işlemi: $result_or \n"; // 111 (2'lik tabanda) -> 7 (10'luk tabanda)

// 101 --- 011        110 --> 2^2 + 2^1 + 2^0 = 7
// XOR (^) operatörüyle işlem yapalım
$result_xor = $a ^ $b;
echo "XOR işlemi: $result_xor \n"; // 110 (2'lik tabanda) -> 6 (10'luk tabanda)

// Sol Shift (<<) operatörüyle işlem yapalım
$result_left_shift = $a << 2; // 101'ı 2 bit sola kaydırma
echo "Sol Shift işlemi: $result_left_shift \n"; // 10100 (2'lik tabanda) -> 20 (10'luk tabanda)

// Sağ Shift (>>) operatörüyle işlem yapalım
$result_right_shift = $b >> 1; // 011'ı 1 bit sağa kaydırma
echo "Sağ Shift işlemi: $result_right_shift \n"; // 001 (2'lik tabanda) -> 1 (10'luk tabanda)
?>
