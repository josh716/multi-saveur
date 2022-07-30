<!DOCTYPE html>
<html lang="en">
         <?php require "comptenent/css.php"; ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php require "comptenent/js.php"; ?>
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
  </head>
  <body>
    <div class="container">
         <div class="row" >
          <div class="col-lg-4 text-danger"></h1><h1>SUBLIME-HOTELS</h1></div></div>
            <div class="col-lg-8text-center">
              <!-- nav section -->
              <?php require "comptenent/nav.php" ?>
              <hr>
              <div class="row">  
             <div class="col-lg-8">
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicateurs -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1" class="active"></li>
          <li data-target="#demo" data-slide-to="2" class="active"></li>
        </ul>

        <!-- Carrousel -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/<?=$_GET['idhotel']?>.jpeg" height="400px" alt="Carrousel slide 1" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                <h4 style="background-color: black ;"> Trouvez l’endroit parfait pour vous</h4>
              </div>
          </div>
          <div class="carousel-item">
            <img src="img/WhatsApp Image 2022-02-21 at 18.28.06 (1).jpeg" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                  <h4>Avec Hotels.com, c’est <br> facile et avantageux. Toujours.</h4>
                  <p>Légende de la slide n°2.</p>
             </div>
          </div>
          <div class="carousel-item">
            <img src="img/WhatsApp Image 2022-02-21 at 18.28.08.jpeg" class="d-block w-100">
             <div class="carousel-caption d-none d-md-block">
                   <h4>Commencez à planifier votre prochaine escapade </h4>
                   <p>Légende de la slide n°3.</p>
             </div>
          </div>
        </div>

        <!-- Contrôles -->
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Précédent</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Suivant</span>
        </a>
      </div>
          </div> 
       <div class="col-lg-4">
         <h2 class="text-center">REFERRANCE</h2>
         
          <ul>
              <li>
              
              </li>
              
              <li>
                
              </li>

               <li>

              </li>

              <li>
              
              </li>

               <li>

               </li>

                <li>

               </li>

                <li>
              
               </li>
          </ul>
       </div>
     </div>
              <hr>
              <div class="row">
          <?php 
            for($i=1;$i<=3;$i++){?>
          <div class="col-lg-4 mt-3">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img/WhatsApp Image 2022-02-21 at 18.28.06 (1).jpeg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">CHAMBRE 1</h5>
                <hr align-center>
                <p>Prix Chambre 1: 20$ part jour</p>
              </div>
            </div>
          </div>
          <?php } ?>
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