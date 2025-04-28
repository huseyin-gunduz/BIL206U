<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "test_database_user";
$password = "1234";
$dbname = "kutuphane";

// Formdan gelen verileri al
$username_input = $_POST['username'];
$password_input = $_POST['password'];

// Veritabanına bağlanma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}


// Kullanıcı adı ve şifreyi kontrol et
$sql = "SELECT * FROM uyeler WHERE eposta='$username_input' AND sifre='$password_input'";
$result = $conn->query($sql);

// Eğer kullanıcı adı ve şifre doğruysa giriş yap
if ($result->num_rows > 0) {
    // Kullanıcı girişi başarılı, burada giriş yapılacak sayfaya yönlendirme yapılabilir.
    echo "Giriş başarılı!";
   
    session_start();
    while($row = $result->fetch_assoc()) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['ad'];
        $_SESSION['surname'] = $row['soyad'];

        header("Location: index.php?error=false");
    }
} else {
    // Kullanıcı adı veya şifre yanlış veya başka bir hata oluştu
    // Kullanıcıyı tekrar login sayfasına yönlendir ve hata mesajı göster
    echo "Giriş basarisiz!";

    header("Location: login.php?error=true");
    exit();
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
