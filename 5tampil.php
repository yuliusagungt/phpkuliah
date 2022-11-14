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
        thead {
            background-color: blue;
        }

        body,
        .container-fluid {
            background-color: #ADD8E6;
        }
    </style>
</head>

<body>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h1>Daftar Stok Barang</h1>
                <h2>Toko IndoMei</h2>
            </div>
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
            <div class="col-12">
                <a href="5input.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Back</a>
            </div>
        </div>
    </div>
</body>

</html>