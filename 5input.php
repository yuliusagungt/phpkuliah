<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventaris";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko IndoMei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body,
        .container {
            background-color: #ADD8E6;
        }
    </style>
</head>

<body>
    <form action="5sql.php" method="POST">
        <div class="container" style="width: 800px;" id="input">
            <div class="row pb-3">
                <div class="col-12 text-center pb-3">
                    <h1>Input Stok Gudang</h1>
                    <h2>Toko IndoMei</h2>
                </div>

                <div class="col-2 pb-4"> <label for="form-control">Kode Barang</label></div>
                <div class="col-6 pb-4 "><input type="text" class="form-control" name="kode" required /></div>

                <div class="col-4"></div>

                <div class="col-2 pb-4"> <label for="form-control">Nama Barang</label></div>
                <div class="col-6 pb-4"><input type="text" class="form-control" name="nama" required /></div>
                <div class="col-4"></div>


                <div class="col-2 pb-1"> <label for="jenis">Jenis Barang</label></div>
                <div class="col-10 pb-1">
                    <input type="radio" name="jenis" value="Makanan" required /> Makanan
                </div>

                <div class="col-2 pb-4"> <label for="form-check-input"></label></div>
                <div class="col-10 pb-4">
                    <input type="radio" name="jenis" value="Non Makanan" required /> Non Makanan
                </div>


                <div class="col-2 pb-4"> <label for="lokasi">Lokasi Rak</label></div>
                <div class="col-10 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="lokasi" name="lokasi" required>
                        <option value="Rak A">Rak A</option>
                        <option value="Rak B">Rak B</option>
                        <option value="Rak C">Rak C</option>
                        <option value="Rak D">Rak D</option>
                        <option value="Rak E">Rak E</option>
                    </select>
                </div>

                <div class="col-2 pb-4"> <label for="form-control">Harga Satuan</label></div>
                <div class="col-6 pb-4"><input type="text" class="form-control" name="harga" required /></div>
                <div class="col-4"></div>


                <div class="col-2 pb-4"> <label for="form-control">Jumlah Stok</label></div>
                <div class="col-6 pb-4"><input type="text" class="form-control" name="stok" required /></div>
                <div class="col-4"></div>

                <div class="col-3 pt-2">
                    <a href="5tampil.php" class="btn btn-primary" role="button">Lihat Daftar Stok</a>
                </div>

                <div class="col-2 pt-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Simpan" />
                </div>

                <div class="col-2 pt-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Update" />
                </div>

                <div class="col-2 pt-2">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        Hapus
                    </button>
                </div>
                <div class="col-3"></div>
                <div class="col-2"></div>
                <div class="col-4 pt-4">
                    <div class="card text-danger text-center border-danger bg-warning" style="width: 500px;">
                        <div class="card-title">
                            <p class="h5">PENTING</p>
                        </div>
                        <div class="card-text">
                            <p class="h6">Sebelum melakukan Update, pastikan kode barang sesuai <br>
                                dengan stok yang ada dalam gudang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pilih Kode Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="5sql.php" method="POST">
                    <div class="modal-body">
                        <div class="col-12"> <label for="form-control">Kode Barang yang akan Dihapus</label></div>
                        <div class="col-12 pb-4 "><input type="text" class="form-control" name="kode" required /></div>
                        <div class="col-12">
                            <?php
                            echo "<table class = \"table\" border = \"5\" style=\"margin-left:auto;margin-right:auto\">";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th scope = \"row\">";
                            echo "No";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Kode";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Nama Barang";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Jenis";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Lokasi";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Harga";
                            echo "</th>";
                            echo "<th scope = \"row\">";
                            echo "Stok";
                            echo "</th>";
                            echo "</tr>";
                            echo "</thead>";


                            echo "<tbody>";
                            $nomor = 1;
                            $sql2 = "SELECT kode, nama, jenis, lokasi, harga, jumlah FROM stok_barang ORDER BY lokasi, nama ASC";
                            $result = mysqli_query($conn, $sql2);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $nomor . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["kode"] . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["nama"] . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["jenis"] . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["lokasi"] . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["harga"] . "<br>";
                                echo "</td>";

                                echo "<td>";
                                echo $row["jumlah"] . "<br>";
                                echo "</td>";

                                echo "</tr>";

                                $nomor++;
                            }
                            echo "</tbody>";

                            echo "</table>";

                            mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input class="btn btn-danger" name="submit" type="submit" value="Hapus" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>