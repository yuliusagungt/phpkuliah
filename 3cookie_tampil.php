<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
</head>

<body>
<div class="container container ml-2 bg-light">
    <h1>Pendaftaran Berhasil</h1>
    <?php
    $noInduk = $_POST["inputNoInduk"];
    $nama = $_POST["inputNama"];
    $status = $_POST["status"];
    $all = "";
    if (!empty($_POST['minat'])) {
        foreach ($_POST['minat'] as $minat) {
            $all .= $minat . ", ";
        }
    }

    setcookie("noInduk", "$noInduk");
    setcookie("nama", "$nama");
    setcookie("status", "$status");
    setcookie("minat", "$all")

    ?>
    <p><a href='./3cookie_tugas.php'>Kembali</a></p>
</div>
</body>

</html>