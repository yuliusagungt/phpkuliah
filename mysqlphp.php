<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platformdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT NIM, NAMA FROM mahasiswa";
  $result = mysqli_query($conn, $sql);
  echo "&emsp; NIM &emsp; &emsp; NAMA <br>";
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo $row["NIM"]. " &emsp; " . $row["NAMA"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  
  mysqli_close($conn);
?>