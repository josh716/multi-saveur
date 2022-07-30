<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "comptenent/css.php"; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php require "comptenent/js.php"; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hotel.com</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 text-danger">
        <h1>MULTI-SAVEUR</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <!-- nav section -->
        <?php require "comptenent/nav.php"; ?>
      </div>
    </div>
    <hr>
    <h1>Où voulez-vous partir ?</h1>
    <div class="row">
      <div class="col-lg-3" style="margin-right: 5px;">
        <form action="">
          <div class="input-group mb-3">
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Destination</option>
              <option value="1">Lubumashi</option>
              <option value="2">Kolwezi</option>
              <option value="3">Likasi</option>
              <option value="4">Kasumbalesa</option>
              <option value="5">Kinshasa</option>
            </select>
          </div>
        </form>
      </div>
      <div class="col-lg-3" style="margin-right: 5px;">
        <form action="">
          <p> <input class="form-control" style="height: 40px; width: 250px;" type="date" placeholder=""></p>
        </form>
      </div>
      <div class="col-lg-3" style="margin-right: 5px;">
        <form action="">
          <p> <input class="form-control" style="height: 40px; width: 250px;" type="date" placeholder=""></p>
        </form>
      </div>
      <div class="col-lg-2">
        <form action="">
          <p> <button class="btn btn-primary">Connexion <span class="glyphicon glyphicon-search-image"></span></span></button></p>
        </form>
      </div>
    </div>
    <!--slider -->
    <?php require "comptenent/slider.php"; ?>
    <hr>
    <?php
    $hotel1 = "karavia hotels";
    $hotel2 = "hhhh"



    ?>
    <div class="row">
    <h2>Avec MULTI-SAVEUR, c’est facile et avantageux.</h2>
      <?php
      for ($i = 1; $i <= 6; $i++) { ?>
        <div class="col-lg-4 mt-3">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/<?= $i ?>.jpeg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">sublime hotel</h5>
              <p class="card-text"><img src="img/m23.jpeg" height="20px" alt=""></p>
              <a href="details.php?idhotel=<?= $i ?>" class="btn btn-primary" style="height: 40px; width: 250px;">Details</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-6">
        <div class="card mb-3">
          <img class="card-img-top" src="img/avatarDefault.jpg" height="400px" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Nos Service</h5>
            <p class="card-text">
              Lorem ipsum dolor sit amet,
              consectetur adipisicing elit.
              Odio qui cumque quas illo quibusdam corrupti molestiae sit impedit, illum
              ipsam quaerat facere nulla sint
              corporis maxime sed, aliquam vero quo.</p>
            <p class="card-text">
              <small class="text-muted">
                MULTI-SAVEUR.COM
              </small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <legend>Avis</legend>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatis
          voluptatibus architecto. Quia odio perferendis fugiat
          nemo ut? Voluptates, numquam! Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatis
          voluptatibus architecto. Quia odio perferendis fugiat
          nemo ut? Voluptates, numquamLorem ipsum dolor sit amet, consectetur adipisicing
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatis
          voluptatibus architecto. Quia odio perferendis fugiat
          nemo ut? Voluptates, numquamLorem ipsum dolor sit amet, consectetur adipisicing
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatis
          voluptatibus architecto. Quia odio perferendis fugiat
          nemo ut? Voluptates, numquam
        </p>
        <legend>Nos Avantage</legend>
        <p> lit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatis
          voluptatibus architecto. Quia odio perferendis fugiat
          nemo ut? Voluptates, numquamLorem ipsum dolor sit amet, consectetur adipisicing
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritati
          elit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatielit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatielit. Eveniet ea dolorem illo incidunt, eum repellat earum
          velit laudantium ut veritatielit. Eveniet ea dolorem illo 
        </p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <p class="lead">
              <img src="img/kymb.png" height="150px" width="150px" alt="">
            </p>
            <h4>Beneficiez des meilleurs services en vous <br> inscrivants sur MULTI-SAVEUR</h4>
            <br>
            <p class="card-text">
              N’attendez pas encore longtemps, inscrivez-vous et
              rejoingnez notre communauté de plus de 5000 membres inscrits,
            </p>
            <br>
            <button class="btn btn-primary">Inscriver vous maintenent</button>
          </div>
        </div>
        <hr>
        <!-- footer-->
        <div class="row">
          <div class="col-lg-12">
            <?php require "comptenent/footer.php"; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="public/js/bootstrap.js"></script>
  <script src="public/jquery/jquery.js"></script>
  <script>
    $('#myCarousel').on('slide.bs.carousel', function() {
      // do something…
    })
  </script>
</body>