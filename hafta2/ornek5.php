<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Örnek 5</title>
</head>
<body>
    <h2>Kullanıcı Girişi</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Kullanıcı Adı:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Şifre:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Giriş Yap">
    </form>

    <?php
    // Form gönderildiğinde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kullanıcı adı ve şifre alınır
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Burada genellikle veritabanı sorguları yapılır ve kullanıcı doğrulama işlemleri gerçekleştirilir
        // Bu örnekte sadece ekrana yazdırıyoruz
        echo "<h3>Giriş Bilgileri:</h3>";
        echo "Kullanıcı Adı: " . $username . "<br>";
        echo "Şifre: " . $password . "<br>";
    }
    ?>
</body>
</html>