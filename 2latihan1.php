<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h1>Latihan 1</h1>
    <?php 
    $suhu = [23, 45, 36, 27, 33, 32, 30, 28, 35, 32];

    echo "<ul>";
    foreach ($suhu as $s){
        echo "<li>$s";
    }
    echo "</ul>";

    
    echo "<button><a href = './2latihan4.php'>Kembali</a></button>";
    ?>
</body>
</html>