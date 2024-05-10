<!DOCTYPE html>
<head>
    <title>GET ile Veri İşleme</title>
    <link rel="stylesheet" href="styles\style7.css">
</head>
<body>
    <div class="container">
        <h1>GET ile Veri İşleme</h1>
    
        <?php
        // Kullanıcı adı ve yaşını GET parametrelerinden al
        $kullanici_adi = $_GET['ad'];
        $yas = $_GET['yas'];
    
        // Kullanıcı adı ve yaşa göre selamlama mesajını oluştur
        $mesaj = "Merhaba, $kullanici_adi! $yas yaşindasin.";
    
        // Eğer her iki parametre de belirtilmişse, mesajı göster
        if (isset($kullanici_adi) && isset($yas)) {
            echo "<p>$mesaj</p>";
        } else {
            echo "<p>Lütfen URL'de ad ve yaş parametrelerini belirtin.</p>";
        }
        ?>
    </div>
</body>
</html>
