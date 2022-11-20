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
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$dosen = $_POST["dosen"];
$hari = $_POST["hari"];
$mulai = $_POST["mulai"];
$selesai = $_POST["selesai"];

$sql = "UPDATE jadual SET kode='$kode', matakuliah='$nama', kelas='$kelas', pengampu='$dosen', hari='$hari', jam_mulai='$mulai', jam_berakhir='$selesai' WHERE kode='$kode'";
if (mysqli_multi_query($conn, $sql)) {
    header('Location:jadwaltampil.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
