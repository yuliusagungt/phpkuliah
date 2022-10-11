<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Dasar PHP</title>
</head>
<body>
    <!-- <p>Nama Anda : <?php echo $_POST["nama"];?></p> -->

    <!-- Latihan3 V2 -->
    <!-- <p>Nama Anda : <?php echo $_POST["nama"];?></p>
    <p>IPK Anda  : <?php echo $_POST["ipk"];?></p>
    <?php 
        echo "Predikat Anda : ";
        $ipk = $_POST["ipk"];
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

    <!-- Latihan4 -->
    <?php 
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

        // if(isset($_POST['submit'])){
        //     if(!empty($_POST['hobby'])){
        //     foreach($_POST['hobby'] as $checked){
        //       echo $checked.", ";
        //     }
        //   }
        // }
    ?>
</body>
</html>