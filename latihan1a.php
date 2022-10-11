<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>

<body>
    <form action="latihan1b.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nim"> NIM  </label>
                </td>

                <td>
                    <input type="text" name="nim" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama"> Nama  </label>
                </td>

                <td>
                    <input type="text" name="nama" value="" />
                </td>
            </tr>

            <tr>
                <td><label for="status">Status Kelulusan  </label></td>

                <td>
                    <select name="status">
                        <option value="Sangat Baik">Sangat Baik</option>
                        <option value="Baik">Baik</option>
                        <option value="Biasa Aja">Biasa Aja</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Sangat Kurang">Sangat Kurang</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><input type="submit" value="Submit" /></td>
            </tr>
        </table>

    </form>
</body>

</html>