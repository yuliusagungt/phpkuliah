<?php
setcookie("sql", "SELECT kode, matakuliah, kelas, pengampu, hari, jam_mulai, jam_berakhir FROM jadual ORDER BY hari DESC, jam_mulai ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="https://www.usd.ac.id/logo/usd.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Jadwal Kuliah</title>
    <style>
        thead {
            background-color: #6495ED;
            text-align: center;
        }

        html {
            text-align: center;
            text-justify: auto;
        }

        body,
        table,
        .card,
        .modal-content {
            background-color: #ADD8E6;
        }

        h6 {
            text-align: right;
            font-style: italic;
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <br>
    <div class="container col-lg-10">
        <h1 class="text-center">Jadwal Kuliah</h1>
        <table class="table">
            <thead class="thead ">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Matakuliah</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Dosen Pengampu</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Mulai(WIB)</th>
                    <th scope="col">Jam Berakhir (WIB)</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jadwal";

                $koneksi = mysqli_connect($servername, $username, $password, $dbname);
                $no = 1;
                $sql = $_COOKIE['sql'];
                $select         = mysqli_query($koneksi, $sql);
                while ($data = mysqli_fetch_array($select)) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $data['kode']; ?></td>
                        <td class="text-center"><?php echo $data['matakuliah']; ?></td>
                        <td class="text-center"><?php echo $data['kelas']; ?></td>
                        <td class="text-center"><?php echo $data['pengampu']; ?></td>
                        <td class="text-center"><?php echo $data['hari']; ?></td>
                        <td class="text-center"><?php echo $data['jam_mulai']; ?></td>
                        <td class="text-center"><?php echo $data['jam_berakhir']; ?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $data['kode']; ?>">Update</a>

                            <div class="modal fade " id="update<?php echo $data['kode']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Jadwal</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <form action="jadwalupdate.php" method="POST">
                                                    <div class="col-12 pb-3">
                                                        <div class="col-4">
                                                            <label for="kode">Kode Matakuliah </label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" class="form-control" name="kode" value="<?php echo $data['kode']; ?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-4">
                                                            <label for="nama">Nama Matakuliah </label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" name="nama" class="form-control" value="<?php echo $data['matakuliah']; ?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-4">
                                                            <label for="jam_berakhir">Dosen Pengampu</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" name="dosen" class="form-control" value="<?php echo $data['pengampu']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-1">
                                                            <label for="kelas">Kelas </label>
                                                        </div>
                                                        <div class="col-1">
                                                            <select class="btn btn-light dropdown-toggle" id="kelas" name="kelas">
                                                                <option value="<?php echo $data['kelas']; ?>"><?php echo $data['kelas']; ?></option>
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
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-1">
                                                            <label for="hari">Hari </label>
                                                        </div>
                                                        <div class="col-1">
                                                            <select class="btn btn-light dropdown-toggle" id="hari" name="hari">
                                                                <option value="<?php echo $data['hari']; ?>"><?php echo $data['hari']; ?></option>
                                                                <option value="Senin">Senin</option>
                                                                <option value="Selasa">Selasa</option>
                                                                <option value="Rabu">Rabu</option>
                                                                <option value="Kamis">Kamis</option>
                                                                <option value="Jumat">Jumat</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-2">
                                                            <label for="mulai">Jam Mulai </label>
                                                        </div>
                                                        <div class="col-1">
                                                            <select class="btn btn-light dropdown-toggle" id="mulai" name="mulai">
                                                                <option value="<?php echo $data['jam_mulai']; ?>"><?php echo $data['jam_mulai']; ?></option>
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
                                                    </div>

                                                    <div class="col-12 pb-3">
                                                        <div class="col-1">
                                                            <label for="selesai">Jam Berakhir </label>
                                                        </div>
                                                        <div class="col-1">
                                                            <select class="btn btn-light dropdown-toggle" id="selesai" name="selesai">
                                                                <option value="<?php echo $data['jam_berakhir']; ?>"><?php echo $data['jam_berakhir']; ?></option>
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
                                                    </div>
                                                    <div class="col-12 bg-warning" style="color:black;">
                                                        <p>Untuk Mengubah Kode Matakuliah dan Nama Matakuliah, <br> Bisa Menghubungi Presiden FIFA</p>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input class="btn btn-primary" name="submit" type="submit" value="Simpan" />
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                        </td>

                        <td>
                            <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $data['kode']; ?>">Delete</a>

                            <div class="modal fade" id="delete<?php echo $data['kode']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Jadwal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="jadwalhapus.php" method="POST">
                                                <p>Apakah Benar Akan Menghapus Matakuliah dibawah</p>
                                                Kode Matakuliah <input type="text" class="form-control" name="kode" value="<?php echo $data['kode']; ?> " readonly>
                                                Nama Matakuliah <input type="text" class="form-control" name="nama" value="<?php echo $data['matakuliah']; ?> " readonly>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-danger" name="submit" type="submit" value="Yakin" />
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        </div>
                                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <form action="jadwalpilih.php" method="POST">
            <div class="row">
                <div class="col-1 pt-4 pr-0 pb-4"> <label for="pilih">Pilih Hari :</label></div>
                <div class="col-1 pt-4 pb-4">
                    <select class="btn btn-light dropdown-toggle" id="pilih" name="pilih" required>
                        <option value="Semua" selected>Semua</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                    </select>
                </div>
                <div class="col-1 pt-4 pb-4">
                    <input class="btn btn-primary" name="submit" type="submit" value="Pilih" />
                </div>
                <div class="col-2 pt-4 pb-4">
                    <a href="jadwalinput.php" class="btn btn-primary" role="button">Input Jadwal Baru</a>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>

    <h6 class="pt-3">by : Yulius Agung T - 205314008</h6>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>