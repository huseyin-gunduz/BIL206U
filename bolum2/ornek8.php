<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Veri Listesi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Dosya Veri Listesi</h2>
        <ul>
            <?php
            $dosya_yolu = "veriler.txt";
            $dosya = fopen($dosya_yolu, "r");

            while (!feof($dosya)) {
                $satir = fgets($dosya);
                echo "<li>$satir</li>";
            }

            fclose($dosya);
            ?>
        </ul>
    </div>
</body>
</html>