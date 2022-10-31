<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

if((isset($_SESSION["name"])) || (isset($_SESSION["favcolor"])) || (isset($_SESSION["favanimal"])) ){
    
// Echo session variables that were set on previous page
echo "Your Name is " . $_SESSION["name"] . "<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
}else{
    echo "<h1>Wis Mbok Hapus Mau Session e </h1>";
}

?>
 <br>
<button><a href="session1.php">Buat Session</a></button>
<button><a href="session3.php">Ganti Isi Session</a></button>
<button><a href="session4.php">Hancurkan Session</a></button>
</body>
</html>