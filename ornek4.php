<html>
<head>
    <title>Kişisel Bilgi Formu</title>
</head>
<body>
    <?php 
    if(!empty($_POST['name'])) 
    {
        echo "Tebrikler, Hoşgeldiniz {$_POST['name']}";
    } 
    ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> İsminiz Giriniz: <input type="text" name="name" />
<input type="submit" />
</form>
</body>
</html>
