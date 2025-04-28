<?php

session_start(); // Oturumu başlat

// Örnek doğru kullanıcı adı ve şifre
$dogru_kullanici_adi = "kullanici";
$dogru_sifre = "sifre";

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gönderilen kullanıcı adı ve şifre
    $girilen_kullanici_adi = $_POST['kullanici_adi'];
    $girilen_sifre = $_POST['sifre'];

    // Kullanıcı doğrulama işlemi
    if ($girilen_kullanici_adi == $dogru_kullanici_adi && $girilen_sifre == $dogru_sifre) {
        // Doğru ise kullanıcıyı ana sayfaya yönlendir
        $_SESSION['kullanici_adi'] = $girilen_kullanici_adi;
        header("Location: ornek4_welcome.php");
        exit;
    } else {
        // Hatalı ise hata mesajını göster
        $hata_mesaji = "Kullanici adi veya şifre hatali!";
    }
}
?>


<!DOCTYPE html>
<head>
<title>Giriş Formu</title>
</head>
<body>

<!-- Giriş Formu -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="kullanici_adi">Kullanici Adi:</label>
    <input type="text" name="kullanici_adi" required><br><br>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" required><br><br>
    <button type="submit">Giriş Yap</button>
</form>

<!-- Hata Mesajı -->
<?= isset($hata_mesaji) ? "<p>$hata_mesaji</p>" : "" ?>

</body>
</html>