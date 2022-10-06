<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>

<body>
    <!-- <?php
    echo " Hello World PHP ";

    $namaDepan = "Yulius";
    $namaBelakang = "Agung";
    $umur = 20;

    echo "</br>Nama Depan :  $namaDepan </br>Nama Belakang : $namaBelakang </br>Umur : $umur";
    ?> -->

    <!-- <?php
    $counter = 1;

    echo "<ul>";
        while($counter <=5){
            echo "<li> Loop ke-$counter";
                $counter++;
        }
        echo "</ul>"
    ?> -->

    <form action="index2.php" method="POST">
        Tuliskan Pesan : <input type="text" name="pesan" value=""/>
        <input type="submit" value="kirim" />
    </form>
</body>

</html>