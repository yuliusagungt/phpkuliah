<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$_SESSION["mengunjungi"] = "Sudah Mengunjungi";

if ($username != $_SESSION['username'] || $password != $_SESSION['password']) {
    echo "<h1>Maaf, Username atau password anda salah</h1>";
    echo "<h2><a href=\"4tugaslogin.php\">";
    echo "Ulangi Login";
    echo "</a></h2>";
} else {
    header('Location:4pilihBarang.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pilih Barang</title>
    <style>
        h1, h2{
            text-align: center;
        }
        h1{
            padding-top: 50px;
        }
    </style>
</head>
<body>
</body>
</html>