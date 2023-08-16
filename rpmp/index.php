<?php
session_start();
include ('includes/dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php include "includes/header.php"?>
    <!-- corosoule                        -------------------- -->
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/railcoro1.jpeg" class="d-block w-100" alt="..." height="70%">
    </div>
    <div class="carousel-item">
      <img src="./img/railcoro2.jpg" class="d-block w-100" alt="..." height="70%">
    </div>
    <div class="carousel-item">
      <img src="./img/railcoro3.jpeg" class="d-block w-100" alt="..." height="70%">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h2 class="mt-3" style="width: 20%;margin:auto;margin-top: 30px;"> RAILWAY PASS SERVICES</h2>
<div class="conatainer mt-5">
    <div class="row mx-5">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/coro.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="conatainer mt-5">
    <div class="row mx-5">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/coro.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/railcoro3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
</div>
<?php
include 'includes/footer.php'
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>