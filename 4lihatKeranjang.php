<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Isi Keranjang</title>
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
    <div class="container bg-light pb-5" style="width: 30vw;" id="utama">
        <div class="row">
            <div class="col-12">
                <h3>Barang Yang Sudah Dipilih</h3>
            </div>
            <div class="col-12">
                <?php
                echo "<ol>";

                if(isset($_SESSION['makanminum'])){
                    $makanminum = $_SESSION['makanminum'];
        
                    foreach($makanminum as $mm){
                        echo "<li>$mm</li>";
                    }
                }
                if(isset($_SESSION['peralatanmandi'])){
                    $peralatanmandi = $_SESSION['peralatanmandi'];
        
                    foreach($peralatanmandi as $pm){
                        echo "<li>$pm</li>";
                    }
                }
                if(isset($_SESSION['alattulis'])){
                    $alattulis = $_SESSION['alattulis'];
        
                    foreach($alattulis as $at){
                        echo "<li>$at</li>";
                    }
                }
                echo "</ol>";
                ?>

            </div>
            <div class="col-12 pt-2">
                <a href="4pilihBarang.php">
                    <input class="btn btn-primary" name="back" value="Tambah Barang" />
                </a>
            </div>
            <div class="col-12 pt-2">
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