<?php
// Degisken tanilama 

// Kullanıcı bilgilerini içeren bir sınıf tanımlama
class User {
    public $username;
    public $age;

    // Constructor metodu
    public function __construct($username, $age) {
        $this->username = $username;
        $this->age = $age;
    }

    // Bilgileri ekrana yazdırmak için bir metot
    public function printInfo() {
        echo "Kullanici adi: " . $this->username . ", " . $this->age . " yaşinda.";
    }
}

// Yeni bir kullanıcı oluşturma
$user1 = new User("Ali", 20);

// Kullanıcı bilgilerini ekrana yazdırma
$user1->printInfo();
?>