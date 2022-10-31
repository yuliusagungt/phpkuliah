<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <title>Halaman Empat</title>
</head>
</head>
<body>
    <h1>Ini Halaman Empat</h1>
    <?php
    /// remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>
    
    <br>
    <button><a href="hal_satu.php">Hal_Satu</a></button>
    <button><a href="hal_dua.php">Hal_dua</a></button>
    <button><a href="hal_tiga.php">Hal_tiga</a></button>
</body>
</html>