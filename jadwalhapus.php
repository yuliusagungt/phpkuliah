<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$kode = $_POST["kode"];

echo $kode;

$sql = "DELETE FROM jadual WHERE kode= '$kode'";
if (mysqli_multi_query($conn, $sql)) {
    header('Location:jadwaltampil.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
