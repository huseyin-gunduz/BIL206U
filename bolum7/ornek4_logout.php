<!DOCTYPE html>
<body>
    
<?php

session_start();

// $_SESSION dizisini boşaltarak tüm session verilerini silebilirsiniz
$_SESSION = array();

// Ayrıca, oturumun sıfırlanması ve yok edilmesi için aşağıdaki adımları da izleyebilirsiniz:
session_unset(); // Tüm oturum değişkenlerini kaldırır
session_destroy(); // Oturumu tamamen yok eder

?>
    <h2>Çikiş yapildi.</h2>
</body>
</html>

    