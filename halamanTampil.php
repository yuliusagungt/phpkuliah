<?php 
echo "<table border=\"3\" cellpadding=\"30\">";
echo "<tr>";
echo "<td>";
$nama = $_POST["nama"];

echo "<h3>Tampilkan Pesanan</h3>";
echo "$nama Memesan";

echo "<br>";

echo "<ol>";
echo "Makanan";

if(!empty($_POST['makanan'])){
    foreach($_POST['makanan'] as $makanan){
        echo "<li>";
        echo $makanan."<br>";
  }
}
echo "</ol>";

echo "<ol>";
echo "Minuman";

if(!empty($_POST['minuman'])){
    foreach($_POST['minuman'] as $minuman){
        echo "<li>";
        echo $minuman."<br>";
  }
}
echo "</ol>";


echo "<p><a href = './halamanInput.php'>Kembali</a></p>";

echo "</table>";
echo "</tr>";
echo "</td>";
?>