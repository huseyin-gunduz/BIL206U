<?php
// Bitsel Operasyonlar

// Değişkenlerin Tanımı
$a = 5; // 101
$b = 3; // 011

// Ve (AND) operatörü: İki bit de 1 ise sonuç 1 olur, aksi takdirde 0 olur.
echo "Ve (AND) Operatörü: " . ($a & $b) . "\n"; // 101 & 011 = 001 (1)

// Veya (OR) operatörü: En az bir bit 1 ise sonuç 1 olur, aksi takdirde 0 olur.
echo "Veya (OR) Operatörü: " . ($a | $b) . "\n"; // 101 | 011 = 111 (7)

// Xor operatörü: İki bit farklı ise sonuç 1 olur, aynı ise sonuç 0 olur.
echo "Xor Operatörü: " . ($a ^ $b) . "\n"; // 101 ^ 011 = 110 (6)

// Ters Çevirme (Not) operatörü: Bir bit 1 ise sonuç 0 olur, 0 ise sonuç 1 olur.
echo "Ters Çevirme (Not) Operatörü a: " . (~$a) . "\n"; // ~101 = 010 (-6)
echo "Ters Çevirme (Not) Operatörü b: " . (~$b) . "\n"; // ~011 = 100 (-4)

// Sol Kaydırma operatörü: Belirtilen sayı kadar bitleri sola kaydırır.
echo "Sol Kaydirma Operatörü a: " . ($a << 1) . "\n"; // 101 << 1 = 1010 (10)

// Sağ Kaydırma operatörü: Belirtilen sayı kadar bitleri sağa kaydırır.
echo "Sağ Kaydirma Operatörü b: " . ($b >> 1) . "\n"; // 011 >> 1 = 001 (1)
?>