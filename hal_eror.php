<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>Halaman Lima</title>
</head>
</head>
<body>
    <?php

    if(!isset($_SESSION["kunjungan1"]) && !isset($_SESSION["kunjungan2"])){
        echo "<h1>Kunjungi Dahulu Halaman Dua</h1>";
        echo "<button><a href=\"hal_dua.php\">Hal_Dua</a></button>";
        
    }else if (!isset($_SESSION["kunjungan1"])){
        echo "<h1>Kunjungi Dahulu Halaman Satu</h1>";
        echo "<button><a href=\"hal_satu.php\">Hal_Satu</a></button>";
    }
    ?>
    
    
</body>
</html>