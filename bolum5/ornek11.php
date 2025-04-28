<?php
class ValueTypeChecker {
    // Değerin bir tam sayı olup olmadığını kontrol eden yöntem
    public function isInt($value) {
        if (is_int($value)) {
            return "Değer bir tam sayidir.\n";
        } else {
            return "Değer bir tam sayi değildir.\n";
        }
    }

    // Değerin bir string olup olmadığını kontrol eden yöntem
    public function isString($value) {
        if (is_string($value)) {
            return "Değer bir stringdir.\n";
        } else {
            return "Değer bir string değildir.\n";
        }
    }

    // Değerin bir dizi olup olmadığını kontrol eden yöntem
    public function isArray($value) {
        if (is_array($value)) {
            return "Değer bir dizidir.\n";
        } else {
            return "Değer bir dizi değildir.\n";
        }
    }

    // Değerin bir boolean olup olmadığını kontrol eden yöntem
    public function isBool($value) {
        if (is_bool($value)) {
            return "Değer bir booleandir.\n";
        } else {
            return "Değer bir boolean değildir.\n";
        }
    }

    // Değerin bir ondalık sayı olup olmadığını kontrol eden yöntem
    public function isFloat($value) {
        if (is_float($value)) {
            return "Değer bir ondalik sayidir.\n";
        } else {
            return "Değer bir ondalik sayi değildir.\n";
        }
    }
}

// Örnek kullanım
$checker = new ValueTypeChecker();
echo $checker->isInt(10);
echo $checker->isString("hello");
echo $checker->isArray([1, 2, 3]);
echo $checker->isBool(true);
echo $checker->isFloat(3.14);

?>
