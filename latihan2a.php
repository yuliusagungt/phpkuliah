<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <form action="latihan2b.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="nama"> Nama </label>
                </td>

                <td>
                    <input type="text" name="nama" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="alamat"> Alamat  </label>
                </td>

                <td>
                    <input type="text" name="alamat" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <label for="umur"> Umur  </label>
                </td>

                <td>
                    <input type="text" name="umur" value="" />
                </td>
            </tr>

            <tr>
                <td>
                    <p>Jenis Kelamin</p>
                </td>

                <td>
                    <input type="radio" name="jenisK" value="Pria">Pria
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>
                <td>
                    <input type="radio" name="jenisK" value="Wanita">Wanita
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="music" value="Music">Music
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="programing" value="Programing">Programing
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="game" value="Game">Game
                </td>
            </tr>

            <tr>
                <td>
                    <p></p>
                </td>

                <td>
                    <input type="checkbox" name="movies" value="Movies">Movies
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" value="Submit" /></td>
            </tr>
        </table>

    </form>
</body>
</html>