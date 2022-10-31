<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>Halaman Tiga</title>
</head>
</head>
<body>
<?php
    // Set session variables
    $_SESSION["kunjungan3"] = "Sudah Mengunjungi";
    if(isset($_SESSION["kunjungan2"])){
        echo "<h1>Ini Halaman Tiga</h1>";
    }else{
        header("Location:hal_eror.php");
    }
    ?>
    
    <br>
    <button><a href="hal_satu.php">Hal_Satu</a></button>
    <button><a href="hal_dua.php">Hal_dua</a></button>
    <button><a href="hal_empat.php">Hal_empat</a></button>
</body>
</html>