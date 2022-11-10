<?php 
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>Buat Session</title>
</head>
<body>
    <?php 
        //$_SESSION['pengguna'] = "Mariyono Wito Karyono";
        
        if(isset($_SESSION["pengguna"])){
            echo "<h1>Welcome " . $_SESSION["pengguna"] . ", Your Session is Set</h1>";
        }
    ?>
</body>
</html>