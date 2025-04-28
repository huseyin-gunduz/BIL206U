
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP ile CSS Kullanimi</title>
    <link rel="stylesheet" href="styles/style5.css">
</head>
<body>
    <div class="container">
        <h1>PHP ile CSS Kullanimi</h1>
        
        <?php
        // PHP kodu buraya gelecek
        $time = date("H"); // Saati al
        $greeting = ""; // Boş bir karşılama mesajı
        
        // Saate göre karşılama mesajını ayarla
        if ($time < "12") {
            $greeting = "Günaydin";
        } elseif ($time < "18") {
            $greeting = "İyi günler";
        } else {
            $greeting = "İyi akşamlar";
        }
        
        // Karşılama mesajını ekrana yazdır
        echo "<p>$greeting, ziyaretçi!</p>";
        ?>
    </div>
</body>
</html>
