<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h1>Form Biodata</h1>
    
    <form action="1latihan2b.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama"> Nama : </label>
                </td>

                <td>
                    <input type="text" name="nama" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="alamat"> Alamat :  </label>
                </td>

                <td>
                    <input type="text" name="alamat" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="umur"> Umur : </label>
                </td>

                <td>
                    <input type="text" name="umur" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="jenisK">Jenis Kelamin : </label>
                </td>

                <td>
                    <input type="radio" name="jenisK" value="Pria"/>Pria
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>
                <td>
                    <input type="radio" name="jenisK" value="Wanita"/>Wanita
                </td>
            </tr>

            <tr>
                <td>
                    <label for="hobby[]"> Hobby : </label>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Music"/>Music
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Programming"/>Programing
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Game"/>Game
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Movies"/>Movies
                </td>
            </tr>
            
            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Travelling"/>Travelling
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Sport"/>Sport
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Organization"/>Organization
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="hobby[]" value="Automotive"/>Automotive
                </td>
            </tr>

            <tr>
                <td><input name = "submit" type="submit" value="submit" /></td>
            </tr>
        </table>

    </form>
</body>
</html>