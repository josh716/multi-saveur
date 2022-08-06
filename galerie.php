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
      <div class="col-lg-4 text-danger"><h1>MULTI-SAVEUR</h1></div>
      </div>
         <div class="row" >
            <div class="col-lg-12">
              <!-- nav section -->
                       <?php require "comptenent/nav.php"; ?>
            </div>     
         </div>
         <div class="row">
        <div class="col-lg-12">
          <hr>
    <!-- Gallery -->
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="img/g4.JPG"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  <h3 text-center>Salle de fete</h3>

    <img
      src="img/g5.JPG"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
    <h3>Piscine</h3>

  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="img/9.jpeg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />
    <h3>Bar au 6ème Niveau</h3>

    <img
      src="img/8.jpeg"height="240px"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
    <h3>Restaurant</h3>
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="img/ch4.png"height="260px"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />
    <h3>Chambre</h3>

    <img
      src="img/g6.JPG"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
    <h3 text-center>Food</h3>
  </div>
</div>
<!-- Gallery -->
  
  </div>
</div>
         </div>
         </div>
         <hr>
         <?php require "comptenent/footer.php"; ?>
         </div> 
         <script src="public/js/bootstrap.js"></script>
     <script src="public/jquery/jquery.js"></script>
     <script>$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})</script>
</body>