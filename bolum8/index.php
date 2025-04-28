<?php
session_start();

// Veritabanı bağlantısı için gerekli bilgiler
$servername = "localhost";
$username = "test_database_user";
$password = "1234";
$dbname = "kutuphane";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
$uye_id = $_SESSION['user_id'];
$uye_ad = $_SESSION['name'];
$uye_soyad = $_SESSION['surname'];

// Yeni kitap ekleme
if(isset($_POST['ekle'])){
    $yazar_adi = $_POST['yazar_adi'];
    $kitap_adi = $_POST['kitap_adi'];
    $tarih = $_POST['tarih'];

    $sql = "INSERT INTO kitaplar (uye_id, yazar_adi, kitap_adi, tarih) VALUES ('$uye_id', '$yazar_adi', '$kitap_adi', '$tarih')";

    if ($conn->query($sql) === TRUE) {
        echo "Yeni kitap başarıyla eklendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Kitap bilgilerini güncelleme
if(isset($_POST['guncelle'])){
    $id = $_POST['id'];
    $yazar_adi = $_POST['yazar_adi'];
    $kitap_adi = $_POST['kitap_adi'];
    $tarih = $_POST['tarih'];

    //echo $id. " "  . $yazar_adi . " " . $kitap_adi. " " . $tarih;

    $sql = "UPDATE kitaplar SET yazar_adi='$yazar_adi', kitap_adi='$kitap_adi', tarih='$tarih' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Kitap bilgileri başarıyla güncellendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Kitap silme
if(isset($_POST['sil'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM kitaplar WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Kitap başarıyla silindi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Kitap Yönetimi</title>
    <link rel="stylesheet" type="text/css" href="style_index.css">
</head>
<body>

<h1> <?php echo "Merhaba, $uye_ad!"; ?><br> </h1>
<h2> Kitap Ekleme Formu</h2>
<form method="post" action="">
    <label for="yazar_adi">Yazar Adı:</label>
    <input type="text" id="yazar_adi" name="yazar_adi" required><br><br>

    <label for="kitap_adi">Kitap Adı:</label>
    <input type="text" id="kitap_adi" name="kitap_adi" required><br><br>

    <label for="tarih">Tarih:</label>
    <input type="date" id="tarih" name="tarih" required><br><br>

    <button type="submit" name="ekle">Ekle</button>
</form>

<h2>Kitaplar</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Yazar Adı</th>
        <th>Kitap Adı</th>
        <th>Tarih</th>
        <th>İşlemler</th>
    </tr>

    <?php
    // Kitapları listeleme
    $sql = "SELECT * FROM kitaplar WHERE uye_id = $uye_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<form class='inline' method='post' action=''>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<td><input type='text' name='yazar_adi' value='" . $row["yazar_adi"] . "'></td>";
            echo "<td><input type='text' name='kitap_adi' value='" . $row["kitap_adi"] . "'></td>";
            echo "<td><input type='date' name='tarih' value='" . $row["tarih"] . "'></td>";
            echo "<td>";

            echo "<button type='submit' name='guncelle'>Güncelle</button>";
            echo "</form>";
            echo "<form class='inline' method='post' action=''>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<button type='submit' name='sil'>Sil</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Kitap bulunmamaktadır.</td></tr>";
    }
    ?>

</table>

</body>
</html>

<?php
// Veritabanı bağlantısını kapat
$conn->close();
?>
