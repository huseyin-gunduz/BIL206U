
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP ile CSS Kullanımı</title>
    <link rel="stylesheet" href="styles/style5.css">
</head>
<body>
    <div class="container">
        <h1>PHP ile CSS Kullanımı</h1>
        
        <?php
        // PHP kodu buraya gelecek
        $kullaniciAdi = "Hüseyin"; // Kullanıcı adı
        
        // Kullanıcı adına göre karşılama mesajı oluştur
        $mesaj = "Merhaba, $kullaniciAdi! Hoş geldiniz.";
        ?>
        
        <p><?php echo $mesaj; ?></p>
    </div>
</body>
</html>
