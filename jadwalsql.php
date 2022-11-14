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
    $sql  = "";
    
    if ($_POST["submit"] == "Simpan") {
        $sql = "INSERT INTO jadual (kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir)
        VALUES ('$kode', '$nama', '$kelas', '$dosen', '$hari', '$mulai', '$selesai');";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:jadwaltampil.php');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

     mysqli_close($conn);
