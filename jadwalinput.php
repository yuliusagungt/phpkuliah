<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jadwal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body,
        .container-fluid {
            background-color: #ADD8E6;
        }
    </style>
</head>

<body>
    <form action="jadwalsql.php" method="POST">
        <div class="container-fluid" style="width: 800px;" id="input">
            <div class="row pb-3">
                <div class="col-12 text-center pb-3">
                    <h1>Input jadwal</h1>
                </div>

                <div class="col-3 pb-4"> <label for="form-control">Kode MataKuliah</label></div>
                <div class="col-6 pb-4 "><input type="text" class="form-control" name="kode" required /></div>

                <div class="col-3"></div>

                <div class="col-3 pb-4"> <label for="form-control">Nama MataKuliah</label></div>
                <div class="col-6 pb-4"><input type="text" class="form-control" name="nama" required /></div>
                <div class="col-3"></div>


                <div class="col-3 pb-4"> <label for="kelas">Kelas</label></div>
                <div class="col-9 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="kelas" name="kelas" required>
                        <option value="Kelas_A">Kelas A</option>
                        <option value="Kelas_B">Kelas B</option>
                        <option value="Kelas_C">Kelas C</option>
                        <option value="Kelas_D">Kelas D</option>
                        <option value="Kelas_E">Kelas E</option>
                        <option value="Kelas_F">Kelas F</option>
                        <option value="Kelas_G">Kelas G</option>
                        <option value="Kelas_H">Kelas H</option>
                        <option value="Kelas_I">Kelas I</option>
                        <option value="Kelas_J">Kelas J</option>
                    </select>
                </div>


                <div class="col-3 pb-4"> <label for="form-control">Nama Dosen Pengampu</label></div>
                <div class="col-6 pb-4"><input type="text" class="form-control" name="dosen" required /></div>
                <div class="col-3"></div>

                <div class="col-3 pb-4"> <label for="hari">Hari</label></div>
                <div class="col-9 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="hari" name="hari" required>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>

                <div class="col-3 pb-4"> <label for="mulai">Jam Mulai</label></div>
                <div class="col-9 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="mulai" name="mulai" required>
                        <option value="07.00">07.00</option>
                        <option value="08.00">08.00</option>
                        <option value="09.00">09.00</option>
                        <option value="10.00">10.00</option>
                        <option value="11.00">11.00</option>
                        <option value="12.00">12.00</option>
                        <option value="13.00">13.00</option>
                        <option value="14.00">14.00</option>
                        <option value="15.00">15.00</option>
                        <option value="16.00">16.00</option>
                        <option value="17.00">17.00</option>
                    </select>
                </div>

                <div class="col-3 pb-4"> <label for="selesai">Jam Selesai</label></div>
                <div class="col-9 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="selesai" name="selesai" required>
                        <option value="07.00">07.00</option>
                        <option value="08.00">08.00</option>
                        <option value="09.00">09.00</option>
                        <option value="10.00">10.00</option>
                        <option value="11.00">11.00</option>
                        <option value="12.00">12.00</option>
                        <option value="13.00">13.00</option>
                        <option value="14.00">14.00</option>
                        <option value="15.00">15.00</option>
                        <option value="16.00">16.00</option>
                        <option value="17.00">17.00</option>
                    </select>
                </div>

                <div class="col-3 pt-2">
                    <a href="jadwaltampil.php" class="btn btn-primary" role="button">Back</a>
                </div>

                <div class="col-2 pt-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Simpan" />
                </div>
            </div>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>