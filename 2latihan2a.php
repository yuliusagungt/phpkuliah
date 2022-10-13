<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2a</title>
</head>
<body>
    <h1>Detil Mahasiswa</h1>
    
    <?php 
    $nimNama = ["101" => "Budi",
                "102" => "Sari",
                "103" => "RUdi",
                "104" => "Jimmy",
                "105" => "Rachel"];
    $terpilih = $_GET["nim"];
    
    echo "<table border = '1'>";
        echo "<tr><td>NIM</td><td>Nama</td></tr>";
        echo "<tr><td>$terpilih</td><td>$nimNama[$terpilih]</td></tr>";
    echo "</table>";
    ?>
</body>
</html>