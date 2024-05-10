
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
        $dersler = array("Matematik", "Fizik", "Kimya", "Biyoloji", "Tarih", "Coğrafya");
        ?>
        
        <ul>
            <?php
            // Dersler dizisini dolaşarak her bir dersi listele
            foreach ($dersler as $ders) {
                echo "<li>$ders</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
