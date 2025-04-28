<?php
// Veritabanı bağlantısı
$servername = "localhost"; // Sunucu adı
$username = "test_database_user"; // Veritabanı kullanıcı adı
$password = "1234"; // Veritabanı şifresi
$dbname = "kutuphane"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Formdan gelen verileri al
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}else{
    echo "Baglanti basarili";
}

// Kullanıcıyı veritabanına ekle
$sql = "INSERT INTO uyeler ( ad, soyad, sifre, eposta, tarih) VALUES ('$name', '$surname' ,'$password', '$email', CURDATE())";

if ($conn->query($sql) === TRUE) {
    header("Location: register_succes.php");
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>