<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>Halaman Dua</title>
</head>
</head>
<body>
    
    <?php
    // Set session variables
    $_SESSION["kunjungan2"] = "Sudah Mengunjungi";

    if(isset($_SESSION["kunjungan1"])){
        echo "<h1>Ini Halaman Dua</h1>";
    }else{
        header("Location:hal_eror.php");
    }
    ?>
    
    <br>
    <button><a href="hal_satu.php">Hal_Satu</a></button>
    <button><a href="hal_tiga.php">Hal_tiga</a></button>
    <button><a href="hal_empat.php">Hal_empat</a></button>
</body>
</html>