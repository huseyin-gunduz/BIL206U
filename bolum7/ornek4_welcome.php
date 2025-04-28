<?php
session_start();

// Oturum kontrolü yap
if (!isset($_SESSION['kullanici_adi'])) {
    header("Location: ornek4_index.php"); // Kullanıcıyı giriş sayfasına yönlendir
    exit;
}

$kullanici_adi = $_SESSION['kullanici_adi'];
?>

<!DOCTYPE html>
<head>
    <title>Hoş Geldiniz</title>
</head>
<body>
    <h1>Hoş geldiniz, <?php echo $kullanici_adi; ?>!</h1>
    <p><a href="ornek4_logout.php">Çikiş Yap</a></p>
</body>
</html>
