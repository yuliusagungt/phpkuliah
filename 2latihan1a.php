<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1a</title>
</head>
<body>
    <h1>Latihan 1a</h1>
    <?php 
    $suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];
    $pnjg = count($suhu);
    $counter = 0;
    $nomor = 1;

    echo "<table border = \"2\" cellpadding = \"2\" cellspacing = \"2\">";
    while($counter < $pnjg){
        echo "<tr>";
            echo "<td>";
                echo "Hari ke - $nomor";
            echo "</td>";
            echo "<td>";
                echo "$suhu[$counter]";
            echo "</td>";
        echo "</tr>";
        $nomor++;
        $counter++;
    }
    echo "</table>";
    ?>
</body>
</html>