<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Kayıt</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
    <form action="register_process.php" method="post">
        <h2>Üye Kayıt Formu</h2>
        <label for="ad">Adı:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="soyad">Soyad:</label><br>
        <input type="text" id="surname" name="surname" required><br>

        <label for="email">E-posta:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Şifre:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" value="Kaydol">
    </form>
</body>
</html>
