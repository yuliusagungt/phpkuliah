<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205314008</title>
</head>

<body>
    <table border="3"cellpadding="30">
        <tr>
            <td>
                <h3>Pesan Makan dan Minuman</h3>

                <form action="halamanTampil.php" method="POST">
                    <table>
                        <tr>
                            <td><label for="nama"> Nama Pemesan </label></td>
                            <td><input type="text" name="nama" /></td>
                        </tr>

                        <tr>
                            <td><label for="makanan[]"> Makanan </label></td>
                            <td><input type="checkbox" name="makanan[]" value="Nasi Goreng" />Nasi Goreng</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="checkbox" name="makanan[]" value="Mie Goreng" />Mie Goreng</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="checkbox" name="makanan[]" value="Mie Godog" />Mie Godog</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="minuman[]"> Minuman </label></td>
                            <td><input type="checkbox" name="minuman[]" value="Es Teh Manis" />Es Teh Manis</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="checkbox" name="minuman[]" value="Es Jeruk" />Es Jeruk</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="checkbox" name="minuman[]" value="Teh Panas" />Teh Panas</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="checkbox" name="minuman[]" value="Jeruk Panas" />Jeruk Panas</td>
                        </tr>

                        <tr>
                            <td>
                                <p></p>
                            </td>
                            <td><input type="submit" value="Simpan" /></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>