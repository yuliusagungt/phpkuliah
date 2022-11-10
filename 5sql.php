<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $kode = $_POST["kode"];
    $nama = $_POST["nama"];
    $jenis = $_POST["jenis"];
    $rak = $_POST["lokasi"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    $sql  = "";
    
    if ($_POST["submit"] == "Simpan") {
        $sql = "INSERT INTO stok_barang (kode, nama, jenis, lokasi, harga, jumlah)
        VALUES ('$kode', '$nama', '$jenis', '$rak', '$harga', '$stok');";

        if (mysqli_multi_query($conn, $sql)) {
            header('Location:5input.php');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else if ($_POST["submit"] == "Update") {
        $sql = "UPDATE stok_barang SET nama='$nama', jenis='$jenis', lokasi='$rak', harga='$harga', jumlah='$stok' WHERE kode=$kode";
        if (mysqli_multi_query($conn, $sql)) {
            header('Location:5input.php');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    } else if ($_POST["submit"] == "Hapus") {
        $sql = "DELETE FROM stok_barang WHERE kode=$kode";
        if (mysqli_multi_query($conn, $sql)) {
            header('Location:5input.php');
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

  mysqli_close($conn);
    ?>