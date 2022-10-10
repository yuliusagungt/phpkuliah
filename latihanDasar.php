<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Dasar PHP</title>
</head>
<body>
    <!-- Latihan1 -->
    <!-- <form action="latihanDasarhasil.php" method="POST">
        Nama <input type="text" name="nama" value=""/>
        <input type="submit" value="kirim" />
    </form> -->

    <!-- Latihan2 -->
<!-- <?php 
        $arr = array(3,2,5,3,7);
        $jum = 0;
        $pnjg = count($arr);

        echo "Array : ";
        $counter = 0;
        while($counter < $pnjg){
            echo "" . $arr[$counter] . ", " ;
            $jum = $jum + $arr[$counter];
            $counter++;
        } 
        $rerata = $jum / $pnjg;
        echo "<br>";
        echo "Length : $pnjg";
        echo "<br>";
        echo "Jumlah : $jum";
        echo "<br>";
        echo "Rerata : $rerata";
        echo "<br>";
    ?> -->

    <!-- <form action="latihanDasarhasil.php" method="POST">
        Nama :  <input type="text" name="nama" value=""/>
        <br>
        IPK :  <input type="text" name="ipk" value=""/>     
        <br>   
        <input type="submit" value="Cek" />
    </form> -->

    <!-- Latihan3 V1 -->
    <!-- <?php 
    $ipk = $_POST["ipk"];
    echo "IPK Anda : $ipk <br>";
    echo "Predikat Anda : ";
    
    if ($ipk < 2.76) {
        echo "Tidak Mendapat Predikat";
    }elseif ($ipk >= 2.76 && $ipk < 3.00) {
        echo "Memuaskan";
    }elseif ($ipk >= 3.00 && $ipk < 3.50) {
        echo "Sangat Memuaskan";
    }elseif ($ipk >= 3.50) {
        echo "Dengan Pujian";
    }else{
        echo "Ramasuk Akal";
    }
    ?> -->

    <form action="latihanDasarhasil.php" method="POST">
        Username :  <input type="text" name="username" value=""/>
        <br>
        Password :  <input type="password" name="password" value=""/>     
        <br>   
        <input type="submit" value="Login" />
    </form>
    <!-- Latihan4 -->
    <!-- <?php 
        $usr = "admin";
        $pas = "admin123";
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $usr && $password == $pas) {
            echo "Hallo, $username Selamat datang! <br>";
            echo "Anda Sukses Login";
        }else{
            echo "Mohon Maaf Gagal Login";
        }
    ?> -->


</body>
</html>