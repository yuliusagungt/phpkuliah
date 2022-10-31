<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>Halaman Satu</title>
</head>
<body>
    <h1>Ini Halaman Satu</h1>
    <?php
    // Set session variables
    $_SESSION["kunjungan1"] = "Sudah Mengunjungi";
    ?>
    <br>
    <button><a href="hal_dua.php">Hal_dua</a></button>
    <button><a href="hal_tiga.php">Hal_tiga</a></button>
    <button><a href="hal_empat.php">Hal_empat</a></button>
</body>
</html>