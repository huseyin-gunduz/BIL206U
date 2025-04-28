<!DOCTYPE html>
<head>
    <title>Form Örneği</title>
</head>
<body>
    <div class="container">
        <h2>Kullanici Bilgi Formu</h2>
        <form action="" method="POST">
            Kullanici Adi:<br>
            <input type="text" name="username"><br><br>
            
            Şifre:<br>
            <input type="password" name="password"><br><br>
            
            E-posta:<br>
            <input type="email" name="email"><br><br>
            
            Cinsiyet:<br>
            <input type="radio" name="gender" value="male">
            Erkek:<br>
            <input type="radio" name="gender" value="female">
            Kadin:<br><br>
            
            <input type="checkbox" name="terms" value="accepted">
            Kullanim koşullarini kabul ediyorum.<br><br>
            
            <input type="hidden" name="action" value="submit_form">
            
            Doğum Tarihi:<br>
            <input type="date" name="birthdate"><br><br>
            
            Sevdiğiniz Renk:<br>
            <input type="color" name="color"><br><br>
            
            Telefon:<br>
            <input type="tel" name="phone" placeholder="555 333 22 11" pattern="[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" ><br><br>
            
            Profil Resmi:<br>
            <input type="file" name="avatar"><br><br>
            
            Biyografi:<br><br>
            <textarea name="bio" rows="4" cols="50"></textarea><br><br>
            
            <input type="submit" value="Gönder">
            <input type="reset" value="Sifirla">
            <button type="button">Özel Buton</button>
        </form>
    </div>

    <?php
    // Form gönderildiğinde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formdan gelen verileri al
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
        $terms = isset($_POST["terms"]) ? $_POST["terms"] : "";
        $birthdate = $_POST["birthdate"];
        $color = $_POST["color"];
        $phone = $_POST["phone"];
        $avatar = $_FILES["avatar"]["name"];
        $bio = $_POST["bio"];

        // Dosyaya yazılacak veriyi oluştur
        $veri = "Kullanici Adi: $username\n";
        $veri .= "Şifre: $password\n";
        $veri .= "E-posta: $email\n";
        $veri .= "Cinsiyet: $gender\n";
        $veri .= "Kullanim Koşullari: $terms\n";
        $veri .= "Doğum Tarihi: $birthdate\n";
        $veri .= "Sevdiğiniz Renk: $color\n";
        $veri .= "Telefon: $phone\n";
        $veri .= "Profil Resmi: $avatar\n";
        $veri .= "Biyografi: $bio\n";

        echo $veri;

    }
    ?>
</body>
</html>
