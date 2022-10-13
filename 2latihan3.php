<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Latihan 3</h1>
    <h2>Daftar Hobi</h2>

    <?php 
        $daftarHobi = ["Sepakbola", "Renang", "Nonton Bioskop", "Main Game", "Shopping"];

        echo "<form action = '2latihan3a.php' method = 'POST'>";
        foreach($daftarHobi as $dh){
            echo "<input name = 'hobi[]' value = '$dh' type = 'checkbox'/>$dh";
            echo "<br>";
        }

        echo "<input type = 'submit'/>";
        echo "</form>";

        
    echo "<button><a href = './2latihan4.php'>Kembali</a></button>";
    ?>
</body>
</html>