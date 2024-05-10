<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Girişi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="login-text">Üye Girişi</h2>
        <?php
        // Eğer giriş başarısız olduysa ve bir hata mesajı varsa, bu mesajı göster
        if (isset($_GET['error']) && $_GET['error'] == 'true') {
            echo '<div class="message error">Kullanıcı adı veya şifre yanlış!</div>';
        }
        ?>
        <form action="login_process.php" method="post" class="login-form">
            <label for="username">Kullanıcı Adı:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Şifre:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Giriş Yap">
        </form>
        <p class="signup-text">Henüz bir hesabınız yok mu? <a href="register.php">Üye Ol</a></p>
    </div>
</body>
</html>
