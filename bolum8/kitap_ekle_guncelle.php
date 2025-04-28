<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kitap Listesi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Kitap Listesi</h2>
    <?php
    // Veritabanı bağlantısı
    $servername = "localhost";
    $username = "test_database_user";
    $password = "1234";
    $dbname = "kutuphane";

    // Veritabanına bağlanma
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol et
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }

    // Kitapları seç ve listele
    $sql = "SELECT * FROM kitaplar";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Tablo başlıkları
        echo "<table><tr><th>Kitap Adı</th><th>Yazar Adı</th><th>Tarih</th><th>İşlemler</th></tr>";

        // Veritabanından gelen her bir satır için
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["kitap_adi"]. "</td>";
            echo "<td>" . $row["yazar_adi"]. "</td>";
            echo "<td>" . $row["tarih"]. "</td>";
            echo "<td><a href='kitap_ekle_guncelle.php?islem=guncelle&id=".$row["id"]."'>Güncelle</a> | <a href='kitap_sil.php?id=".$row["id"]."'>Sil</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Hiç kitap bulunamadı.";
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
    ?>
    <br>
    <a href="kitap_ekle_guncelle.php?islem=ekle">Yeni Kitap Ekle</a>
</body>
</html>
