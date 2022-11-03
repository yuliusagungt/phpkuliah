<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Logout</title>
</head>

<body>
  
<?php
    /// remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    ?>
  <div class="container bg-light" style="width: 400px; height: 300px;">
    <div class="row text-center">
      <div class="col-12">
        <h1>Terima Kasih Atas Kunjungan Anda</h1>
      </div>
      <div class="col-12 pl-5">
        <h3><a href="4tugaslogin.php">
            Ulangi Login
          </a></h3>
      </div>
    </div>
  </div>

</body>

</html>