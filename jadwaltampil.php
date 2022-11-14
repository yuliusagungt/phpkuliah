<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal";

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
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        thead {
            background-color: #6495ED;
        }

        body,
        .container-fluid {
            background-color: #ADD8E6;
        }
    </style>
</head>

<body>
    <div class="container-fluid text-center">
        <div class="row text-center">
            <div class="col-12 text-center pb-5">
                <h1>Jadwal Kuliah</h1>
            </div>
        </div>

        <form action="jadwalpilih.php" method="POST">
            <div class="row">
                <div class="col-2 pb-4"> <label for="pilih">Lihat Jadwal Berdasarkan Hari :</label></div>
                <div class="col-1 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="pilih" name="pilih" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Semua">Semua</option>
                    </select>
                </div>
                <div class="col-1 pb-4">
                    <input class="btn btn-primary" name="submit" type="submit" value="Pilih" />
                </div>
                <div class="col-2 pb-4">
                    <a href="jadwalinput.php" class="btn btn-primary" role="button">Input Jadwal Baru</a>
                </div>
                <div class="col-2 pb-4">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                        Hapus
                    </button>
                </div>
            </div>
        </form>
        <div class="row"></div>
        <div class="col-12 pt-5">

            <?php
            $sql = $_COOKIE['sql'];

            echo "<table class = \"table\" border = \"5\" style=\"margin-left:auto;margin-right:auto\">";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope = \"row\">";
            echo "Kode";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "MataKuliah";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "Kelas";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "Dosen Pengampu";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "Hari";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "Jam Mulai";
            echo "</th>";
            echo "<th scope = \"row\">";
            echo "Jam Berakhir";
            echo "</th>";
            echo "</tr>";
            echo "</thead>";


            echo "<tbody>";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>";
                echo $row["kode"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["matakuliah"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["kelas"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["pengampu"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["hari"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["jam_mulai"] . "<br>";
                echo "</td>";

                echo "<td>";
                echo $row["jam_berakhir"] . "<br>";
                echo "</td>";

                echo "</tr>";
            }
            echo "</tbody>";

            echo "</table>";
            mysqli_close($conn);
            ?>
        </div>
    </div>
    </div>

    <div class="modal fade modal-xl" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Pilih Kode Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="jadwalpilih.php" method="POST">
                    <div class="modal-body">
                        <div class="col-12"> <label for="form-control">Kode Barang yang akan Dihapus</label></div>
                        <div class="col-12 pb-4 "><input type="text" class="form-control" name="kode" required /></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input class="btn btn-danger" name="submit" type="submit" value="Hapus" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>