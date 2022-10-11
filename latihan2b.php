<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>

<body>
    <?php
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $umur = $_POST["umur"];
    $jenisK = $_POST['jenisK'];

    echo "<table border = \"5\" cellpadding = \"5\" cellspacing = \"5\">";
    echo "<tr>";
    echo "<td colspan=\"2\">";

    echo "<center>";
    echo "<h1> Form Biodata - Review </h1>";
    echo "</center>";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Nama : ";
    echo "</td>";


    echo "<td>";
    echo "$nama";
    echo "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>";
    echo "Alamat : ";
    echo "</td>";


    echo "<td>";
    echo "$alamat";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Umur : ";
    echo "</td>";


    echo "<td>";
    echo "$umur";
    echo "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>";
    echo "Jenis Kelamin : ";
    echo "</td>";


    echo "<td>";
    echo "$jenisK";
    echo "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td>";
    echo "Hobby : ";
    echo "</td>";


    echo "<td>";
    if(isset($_POST['submit'])){
        if(!empty($_POST['hobby'])){
        foreach($_POST['hobby'] as $pilih){
          echo $pilih.", ";
        }
      }
    }
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
</body>

</html>