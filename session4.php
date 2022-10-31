<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<br>

<button><a href="session1.php">Buat Session</a></button>
<button><a href="session2.php">Cetak Session</a></button>
<button><a href="session3.php">Ganti Isi Session</a></button>
</body>
</html>