<!DOCTYPE html>

<body>
    <h2>Üye Kayit Formu</h2>

    <form method="POST"> 
        Adiniz<br>
        <input type="text" name="ad" size = 10 ><br><br>
        
        Soyadiniz<br>
        <input type="text" name="soyad"><br><br>
        
        Yas<br>
        <input type="number" name="yas" max="18" min="1"><br><br>

        Adres<br>
        <input type="text" name="adres" value = "belirsiz" disabled><br><br>

        <input type="submit" value="Gönder">
        <input type="reset" value="Temizle"><br> 
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ad = $_POST["ad"];
        $soyad = $_POST["soyad"];
        $yas = $_POST["yas"];
        $adres = $_POST["adres"];

        
        echo "<h3>Üye Kaydi Başarili!</h3>";
        echo "<p>Ad: $ad</p>";
        echo "<p>Soyad: $soyad</p>";
        echo "<p>Yas: $yas</p>";
        echo "<p>Adres: $adres</p>";


    }
    ?>

</body>
</html>
