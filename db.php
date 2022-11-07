<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql2 = "INSERT INTO mahasiswa (NIM, NAMA)
    VALUES ('205314034', 'Hadiyono');";
$sql2 .= "INSERT INTO mahasiswa (NIM, NAMA)
    VALUES ('205314035', 'Sulasi');";
$sql2 .= "INSERT INTO mahasiswa (NIM, NAMA)
    VALUES ('205314036', 'Sortani');";
$sql2 .= "INSERT INTO mahasiswa (NIM, NAMA)
    VALUES ('205314037', 'Suhariyanto')";

if (mysqli_multi_query($conn, $sql2)) {
    echo "Sukses Menambah";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  

  $sql = "SELECT NIM, NAMA FROM mahasiswa";
  $result = mysqli_query($conn, $sql);
  echo "<table border = \"5\" cellpadding=\"5\" cellspacing = \"5\">";
  echo "<tr>";
  echo "<th>";  echo "NIM";  echo "</th>";
  echo "<th>";  echo "NAMA";  echo "</th>";
  echo "</tr>";

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        
    echo "<tr>";
    echo "<td>";
        echo $row["NIM"]. "<br>";
    echo "</td>";
    
    echo "<td>";
        echo $row["NAMA"]. "<br>";
    echo "</td>";
    echo "</tr>";
    }
  } else {
    echo "0 results";
  }

  echo "</table>";
  mysqli_close($conn);
?>