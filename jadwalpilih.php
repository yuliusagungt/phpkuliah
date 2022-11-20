<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<form action=\"jadwaltampil.php\">";

setcookie("sql", "", 0);
setcookie("del", "", 0);

$pilih = $_POST['pilih'];

if ($pilih == "Senin") {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual WHERE hari='Senin' ORDER BY jam_mulai ASC");
    header('Location:jadwaltampil.php');
} else if ($pilih == "Selasa") {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual WHERE hari='Selasa' ORDER BY jam_mulai ASC");
    header('Location:jadwaltampil.php');
} else if ($pilih == "Rabu") {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual WHERE hari='Rabu' ORDER BY jam_mulai ASC");
    header('Location:jadwaltampil.php');
} else if ($pilih == "Kamis") {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual WHERE hari='Kamis' ORDER BY jam_mulai ASC");
    header('Location:jadwaltampil.php');
} else if ($pilih == "Jumat") {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual WHERE hari='Jumat' ORDER BY jam_mulai ASC");
    header('Location:jadwaltampil.php');
} else {
    setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual ORDER BY hari DESC, jam_mulai ASC");
    header('Location:jadwaltampil.php');
}

echo "</form>";
mysqli_close($conn);
