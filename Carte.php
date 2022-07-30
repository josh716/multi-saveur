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
         <hr>
         <?php require "comptenent/footer.php"; ?>
         <hr>
         <div id="map">
         <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
         </script>
         </div>
         </div> 
         <script src="public/js/bootstrap.js"></script>
     <script src="public/jquery/jquery.js"></script>
     <script>$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})</script>
</body>