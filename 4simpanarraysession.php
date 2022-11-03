<?php 
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>Array Session</title>
</head>
<body>
    <?php 
        $daftarBuah = array("Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian");

        $_SESSION['listBuah'] = $daftarBuah;
        echo "<h1>Daftar Buah sudah disimpan dalam session</h1>"
    ?>
</body>
</html>