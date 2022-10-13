<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1>Latihan 2</h1>
    <?php 
        $nim = ["101", "102", "103", "104", "105"];

        echo "<h2>Daftar No Induk Mahasiswa</h2>";
        echo "<ol>";    
        foreach($nim as $n){
            echo "<li><a href = './2latihan2a.php?nim=$n'>$n</a>";
        }
        echo "</ol>";
    ?>
</body>
</html>