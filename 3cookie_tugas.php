<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        #minat {
            margin-right: 15px;
        }
        <?php 
            if(!isset($_COOKIE['noInduk']) && !isset($_COOKIE['nama']) && !isset($_COOKIE['status'])&& !isset($_COOKIE['minat'])){  
                echo "#hasil{";
                echo "display: none;";
                echo "}";   
            }else{
                echo "#daftar{";
                echo "display: none;";
                echo "}";
            }
        ?>
    </style>
    <title>Pendaftaran Seminar</title>
</head>

<body>

    <div class="container container ml-2" id="daftar">
        <h1>PENDAFTARAN PESERTA SEMINAR</h1>

        <form action="3cookie_tampil.php" method="POST">
            <div class="form-group row">
                <label for="inputNoInduk" class="col-sm-1 col-form-label">No Induk</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="inputNoInduk" />
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNama" class="col-sm-1 col-form-label">Nama</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="inputNama" />
                </div>
            </div>
            <fieldset class="form-group row">
                <legend class="col-form-label col-sm-1 float-sm-left pt-0">Status</legend>
                <div class="col-sm-11">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="Dosen" />
                        <label class="form-check-label" for="gridRadios1">
                            Dosen
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="Mahasiswa" />
                        <label class="form-check-label" for="gridRadios2">
                            Mahasiswa
                        </label>
                    </div>
                </div>

                <legend class="col-form-label col-1 float-sm-left pt-0" id="minat">Minat</legend>
                <div class="co-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Programming" name="minat[]" />
                        <label class="form-check-label" for="Programming">
                            Programming
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Database" name="minat[]" />
                        <label class="form-check-label" for="Database">
                            Database
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Networking" name="minat[]" />
                        <label class="form-check-label" for="Networking">
                            Networking
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Multimedia" name="minat[]" />
                        <label class="form-check-label" for="Multimedia">
                            Multimedia
                        </label>
                    </div>
                </div>
            </fieldset>
            <input class="btn btn-primary" name="submit" type="submit" value="Daftar" />
        </form>
    </div>

    <?php

    ?>
    <div class="container container ml-2 bg-light" id="hasil">
        <h1>Anda Sudah Terdafter Sebagai Peserta Seminar</h1>
        <table border="5" cellpadding = "10">
            <tr>
                <td>No Induk</td>
                <td><?php echo $_COOKIE['noInduk'];?></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><?php echo $_COOKIE['nama']; ?></td>
            </tr>

            <tr>
                <td>Status</td>
                <td><?php echo $_COOKIE['status'];?></td>
            </tr>

            <tr>
                <td>Minat</td>
                <td><?php echo $_COOKIE['minat'];?></td>
            </tr>
        </table>
        
    <button><a href='./3dell.php'>Dell Cookie</a></button>
    </div>
</body>

</html>