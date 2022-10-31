<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = "Warsiyo Kardi";
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

?>
<br>
<button><a href="session2.php">Cetak Session</a></button>
<button><a href="session3.php">Ganti Isi Session</a></button>
<button><a href="session4.php">Hancurkan Session</a></button>
</body>
</html>