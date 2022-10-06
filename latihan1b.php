<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <h1>STATUS KELUSUSAN MAHASISWA</h1>
    <?php 
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $status = $_POST["status"];

    echo "Mahasiswa dengan Nama $nama NIM $nim berhasil menyelesaikan studi S1 dengan predikat $status";
    ?>
</body>
</html>