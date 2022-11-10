<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Pilih Barang</title>
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
    <form action="4masukKerajang.php" method="POST">
        <div class="container bg-light" style="width: 800px; height:800px;" id="utama">
            <div class="row text-center pb-5">
                <div class="col-12">
                    <h1>Pilih Barang</h1>
                </div>

                <div class="col-12">
                    <?php echo "<h2>Selamat Datang " . $_SESSION["username"] .  "</h2>"; ?>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col-12">
                    <b> Makanan Minuman </b>
                </div>

                <div class="col-12">
                    <div class="co-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Gula" name="makanminum[]" />
                            <label class="form-check-label" for="Gula">
                                Gula
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Teh" name="makanminum[]" />
                            <label class="form-check-label" for="Teh">
                                Teh
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kopi" name="makanminum[]" />
                            <label class="form-check-label" for="Kopi">
                                Kopi
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Susu" name="makanminum[]" />
                            <label class="form-check-label" for="Susu">
                                Susu
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Biskuit" name="makanminum[]" />
                            <label class="form-check-label" for="Biskuit">
                                Biskuit
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-12">
                    <b> Peralatan Mandi </b>
                </div>

                <div class="col-12">
                    <div class="co-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sikat Gigi" name="peralatanmandi[]" />
                            <label class="form-check-label" for="Sikat Gigi">
                                Sikat Gigi
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pasta Gigi" name="peralatanmandi[]" />
                            <label class="form-check-label" for="Pasta Gigi">
                                Pasta Gigi
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sabun" name="peralatanmandi[]" />
                            <label class="form-check-label" for="Sabun">
                                Sabun
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Shampoo" name="peralatanmandi[]" />
                            <label class="form-check-label" for="Shampoo">
                                Shampoo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sabun Cuci Muka" name="peralatanmandi[]" />
                            <label class="form-check-label" for="Sabun Cuci Muka">
                                Sabun Cuci Muka
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-12">
                    <b> Alat Tulis </b>
                </div>

                <div class="col-12">
                    <div class="co-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pensil" name="alattulis[]" />
                            <label class="form-check-label" for="Pensil">
                                Pensil
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Penggaris" name="alattulis[]" />
                            <label class="form-check-label" for="Penggaris">
                                Penggaris
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Penghapus" name="alattulis[]" />
                            <label class="form-check-label" for="Penghapus">
                                Penghapus
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Ballpoint" name="alattulis[]" />
                            <label class="form-check-label" for="Ballpoint">
                                Ballpoint
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Kertas HVS" name="alattulis[]" />
                            <label class="form-check-label" for="Kertas HVS">
                                Kertas HVS
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col-3 pt-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Masukan Keranjang" />
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
    </form>
    </div>
    <div class="countainer text-center" id="bayangan">
        <h1>Login Dulu Boss</h1>
        <h3><a href="4tugaslogin.php">
                Ulangi Login
            </a></h3>
    </div>
</body>

</html>