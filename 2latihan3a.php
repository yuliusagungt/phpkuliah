<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3a</title>
</head>
<body>
    <h1>Latihan 3a</h1>
    <h2>Daftar Hobi yang Kupilih</h2>

    <?php
    echo "<ol>"; 
        if(!empty($_POST['hobi'])){
            foreach($_POST['hobi'] as $pilih){
                echo "<li>";
                echo $pilih."<br>";
          }
        }
    echo "</ol>";

    echo "<a href = './2latihan3.php'>kembali</a>";
    ?>
</body>
</html>