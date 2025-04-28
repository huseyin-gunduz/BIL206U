<!DOCTYPE html>
<head>
    <title>Sayfa 2</title>
</head>
<body>
    <h2>Sayfa 2</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "<p>Ad: $name</p>";
        echo "<p>E-posta: $email</p>";
    }
    ?>
</body>
</html>
