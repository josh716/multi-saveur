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
          <br>   <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8092563.750352137!2d16.88117552013423!3d-7.952657969016833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723c001f32e05d%3A0x27dee5331ae71785!2sH%C3%B4tel%20Pullman%20Lubumbashi%20Grand%20Karavia!5e0!3m2!1sfr!2scd!4v1659265438193!5m2!1sfr!2scd" 
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div>
         <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8092563.750352137!2d16.88117552013423!3d-7.952657969016833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723c001f32e05d%3A0x27dee5331ae71785!2sH%C3%B4tel%20Pullman%20Lubumbashi%20Grand%20Karavia!5e0!3m2!1sfr!2scd!4v1659265438193!5m2!1sfr!2scd" 
          width="100" height="200" style="border:0;" allowfullscreen="" 
          loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>  -->
        
         </div>
         <hr>
         <?php require "comptenent/footer.php"; ?>
         <hr>
         <!-- <div id="map">
         <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
         </script> -->
         </div>
         </div> 
         <script src="public/js/bootstrap.js"></script>
     <script src="public/jquery/jquery.js"></script>
     <script>$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})</script>
</body>