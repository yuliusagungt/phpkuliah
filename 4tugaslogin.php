<?php
session_start();
$_SESSION["username"] = "Admin";
$_SESSION["password"] = "Admin";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container bg-light" style="width: 600px; height:300px;">
        <form action="4eror.php" method="POST">
            <div class="row">
                <div class="col-12 pb-3 text-center">
                    <h1>Login Form</h1>
                </div>
                <div class="col-12 pb-2">
                    Usename<input type="text" class="form-control" name="username" />
                </div>

                <div class="col-12 pb-2">
                    Password<input type="password" class="form-control" name="password" />
                </div>

                <div class="col-12 pb-2">
                    <input class="btn btn-primary" name="submit" type="submit" value="Masuk" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>