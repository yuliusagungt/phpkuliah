<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Barang Berhasil Disimpan</title>
    <style>
        <?php
        if (isset($_SESSION["mengunjungi"])) {
            echo "#bayangan{";
            echo "display: none;";
            echo "}";
        } else {
            echo "#utama{";
            echo "display: none;";
            echo "}";
        }
        ?>
    </style>
</head>

<body>
    <div class="container bg-light pb-5" style="width: 50vw;" id="utama">
        <div class="row">
            <div class="col-12 text-center">
                <h4>Barang Anda Berhasil Disimpan di Keranjang</h4>
            </div>
            <div class="col-12">
                <?php

                if (isset($_POST['makanminum'])) {
                    $_SESSION['makanminum'] = $_POST['makanminum'];
                }

                if (isset($_POST['peralatanmandi'])) {
                    $_SESSION['peralatanmandi'] = $_POST['peralatanmandi'];
                }

                if (isset($_POST['alattulis'])) {
                    $_SESSION['alattulis'] = $_POST['alattulis'];
                }
                ?>

            </div>
            <div class="col-1 pt-2">
                <p></p>
            </div>
            <div class="col-3 pt-2">
                <a href="4pilihBarang.php">
                    <input class="btn btn-primary" name="back" value="Pilih Barang" />
                </a>
            </div>
            <div class="col-3 pt-2">
                <a href="4lihatKeranjang.php">
                    <button type="button" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                        </svg>
                        Lihat Keranjang
                    </button>
                </a>
            </div>
            <div class="col-3 pt-2">
                <a href="4logout.php">
                    <input class="btn btn-danger" name="Logout" value="Logout" />
                </a>
            </div>
        </div>
    </div>

    <div class="countainer text-center" id="bayangan">
        <h1>Login Dulu Boss</h1>
        <h3><a href="4tugaslogin.php">
                Ulangi Login
            </a></h3>
    </div>
</body>

</html>