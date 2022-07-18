<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Energy space</title>
</head>

<body>
  <!-- ======================== la navbar ====================== -->
  <?php include('./php/navbar.php'); ?>

  <!-- ================ section Portofolio-slid =============== -->
  <div class="container-fluid portofolio-carousel">

    <div class="container p-5 ">
      <h1 class=" my-5 text-white text-center shadow-sm mt-0">OUR STARTUPS PORTFOLIO</h1>
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="./image/slids/slid_1.webp" class="d-block w-100" alt="..." />
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_2.webp" class="d-block w-100" alt="..." />
          </div>

          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_3.webp" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_7.webp" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_4.webp" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_5.webp" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="./image/slids/slid_6.webp" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- ==============section footer =============== -->

  <?php include('./php/footer.php'); ?>
  <!--End-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>