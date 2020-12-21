<?php 
$data = file_get_contents('data/rukuniman.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Rukun Iman & Maknanya</title>
  </head>
  <body background="img/bg.jpg">
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">    
        <a class="navbar-brand" href="#">
            <img src="img/logo1.png" width="45">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">All Surat Al-Qur'an</a>
            <a class="nav-item nav-link active" href="nabi.php">25 Nabi & Rasul</a>
            <a class="nav-item nav-link active" href="rukuniman.php">Rukun Iman & Maknanya</a>
            </div>
        </div>
    </div>
  </nav>

    <div class="container">

        <div class="row mt-3">
            <div class="col">
                <h1>Rukun Iman & Maknanya</h1><br><br>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <?php foreach ($menu as $row) : ?>
            <div class="col-md-6">
              <img src="img/rukuniman.jpg" alt="" width="100%" height="90%">
            </div>
            <div class="col-md-6">
            <div class="card mb-3">
              <div class="card-body">
                <h5 class="card-title">Nomor : <?= $row["id"]; ?></h5>
                <h5 class="card-title"><b><h3><i><?= $row["name"]; ?></i></h3></b></h5>
                <h5 class="card-title"><b><i>Maknanya : </i></b><?= $row["makna"]; ?></h5>
              </div>
            </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>


    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>