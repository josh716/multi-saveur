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
         <br>
    <div class="row">
       <div class="col-lg-12">
               <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
        <div class="row py-3 shadow-5">
            <div class="col-12 mb-1">
                <div class="lightbox">
                    <img
                          src="img/golo.jpeg"
                          alt="Gallery image 1"
                          class="ecommerce-gallery-main-img active w-50"
                    />
         </div>
     </div>
       <div class="col-3 mt-1">
                  <img
                        src="img/tote.jpeg"
                        data-mdb-img=""
                        alt="Gallery image 1"
                        class="active w-100"
                  />
       </div>
         <div class="col-3 mt-1">
                  <img
                        src="img/vil0.jpeg"
                        data-mdb-img=""
                        alt="Gallery image 2"
                        class="w-100" height="250px"
                  />
          </div>
            <div class="col-3 mt-1">
                  <img
                          src="img/WhatsApp Image 2022-02-21 at 18.28.06.jpeg"
                          data-mdb-img=""
                          alt="Gallery image 3"
                          class="w-100" height="250px"
                  />
             </div>
              <div class="col-3 mt-1">
                  <img
                        src="img/ch5.png"
                        data-mdb-img=""
                        alt="Gallery image 4"
                        class="w-100" height="250px"
                  />
                </div>
              </div>
            </div>
          </div>
      </div>
         <hr>
    <div class="row">
       <div class="col-lg-4">
            <legend>
                   HÉBERGEMENT
            </legend>
            <hr>
            <p>
                  MULTI-SAVEUR Offre un hébergement de luxe avec vue sur le centre-ville de 
                  Lubumbashi; situé à
                  moins de 15km de la zone de l'aéroport international de Luano.
            </p>
    </div>
      <div class="col-lg-4">
              <legend>
                   NOS SERVICES
              </legend>
            <hr>
            <p>
                  Hébergement, Restaurant, Terrasse avec piscine, Hotel, 
                  Salle de massage, Salle de sport, 
                  Salle de mariage, Salle des réunions, Salon de coiffure.
            </p>
      </div>
         <div class="col-lg-4">
            <legend>DIVERTISSEMENT</legend>
            <hr>
            <p>
                Pour mieux vous détendre, Upemba Hotel dispose d'une piscine et une terrasse
                 extérieure 
                au
                balcon sixième niveau avec une belle vue bien exposée sur la ville
            </p>
         </div>
      </div>
         <br>
      <div class="row">
           <div class="col-lg-4">
          <legend>UN PEU DE NOUS</legend>
          <hr>
          <p>
              Hotel Upemba est un hotel situé en plein coeur du centre ville de Lubumbashi, 
              celui-ci vous propose un hebergement de luxe non loin de l'aéroport international de 
              la Luano, une piscine pour vous détendre, une terrasse extérieure au balcon sixième niveau avec 
              une belle vue exposée sur la ville ainsi qu'un restaurant vous permettant de 
              savourer des plats Méditerranéens, Européens et Africains.
          </p>
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