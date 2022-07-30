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
            <div class="row">  
              <div class="col-lg-6">
                <h2>Votre Réservation</h2>
                <hr text-center>
              <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Entree</label>
      <input type="date" class="form-control" id="" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="input">Sortie</label>
      <input type="date" class="form-control" id="" placeholder="">
    </div>
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">Nuit</label>
      <select id="inputState" class="form-control">
      <option selected>1</option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
              <option value="4">5</option>
              <option value="5">6</option>
      </select>
    </div>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputState">Aulte</label>
      <select id="inputState" class="form-control">
      <option selected>1</option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
              <option value="4">5</option>
              <option value="5">6</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Enfant</label>
      <select id="inputState" class="form-control">
      <option selected>1</option>
              <option value="1">2</option>
              <option value="2">3</option>
              <option value="3">4</option>
              <option value="4">5</option>
              <option value="5">6</option>
      </select>
    </div>
  </div>
     <hr text-center>
         <button type="submit" class="btn btn-primary"> verifier votre disponibilite</button>
   </form>
  </div>
  <div class="col-lg-6">
     <form action="">
                          <p >
                            <input  class="form-control" style="height: 60px; width: 450px;" type="text" placeholder="-> Confirmer la Reservation">
                          </p>

                        <p >
                            <input  class="form-control" style="height: 60px; width: 450px;" type="text" placeholder="Votre nom">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 60px; width: 450px;" type="text" placeholder="Telphone">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 60px; width: 450px;" type="text" placeholder="Votre email">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 60px; width: 450px;" type="text" placeholder="Note">

                        </p>
                        <button type="submit" class="btn btn-primary"> Reservez maintenant</button>
      </form>
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