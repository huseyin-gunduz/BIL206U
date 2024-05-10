<!DOCTYPE html>

<body>
    <h2>PHP Form Örneği</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    
        Adiniz<br>
        <input type="text" name="name" id="name"><br><br>

        Yaş
        Age<br>
        <input type="number" name="age" id="age"><br>
        <br>

        Cinsiyet<br>
        <select name="gender" id="gender">
            <option value="male">Erkek</option>
            <option value="female">Kadin</option>
        </select>
        <br>
        <br>
        
        Bize İletin:<br>
        <textarea cols="30" rows="10" name="mesaj" placeholder="Mesajınızı yazın"> 
        </textarea><br><br>


        <input type="submit" name="submit" value="Gönder">
    </form>

    <?php
    // Form gönderildiğinde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $mesaj = $_POST["mesaj"];

        // Form verilerini işlemek için burada gerekli kodları yazabilirsiniz.
        // Örneğin, veritabanına kaydetmek, e-posta göndermek veya başka bir işlem yapmak.
        
        // Örneğin, form verilerini ekrana yazdıralım:
        echo "<h2>Gönderilen Bilgiler:</h2>";
        echo "<p>Ad: $name</p>";
        echo "<p>Yaş: $age</p>";
        echo "<p>Cinsiyet: $gender</p>";
        echo "<p>Mesaj: $mesaj</p>";
    }
    ?>
</body>
</html>
