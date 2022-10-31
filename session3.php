<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
$_SESSION["name"] = "Sulasi Joyo Ikromo";
?>
<br>
<button><a href="session1.php">Buat Session</a></button>
<button><a href="session2.php">Cetak Session</a></button>
<button><a href="session4.php">Hancurkan Session</a></button>
</body>
</html>