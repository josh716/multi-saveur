<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.4.1-dist">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!doctype html>
<html lang="en">
    <title>contacte</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <body>
    <div class="container">
    <div class="col-lg-4 text-danger"><h1>MULTI-SAVEUR</h1></div>
            <div class="row">
              <? require "comptenent/nav.php"; ?>
            </div>
            <br>
            <div class="row">
             <div class="col-lg-12" style="background-image: url('img/avatarDefault.jpg') ;">
                <h2 class="text-black">
                    <center>
                         CONTACTEZ-NOUS 
                    </center>
               </h2>
               <p>
                      <center>
                        Remplissez le formulaire à le section suivante pour nous faire parvenir votre suggestion.
                      </center>
               </p>
             </div>
            </div>
            <hr>
    <div class="row">
            <div class="col-lg-4">
                <legend>AVANT DE NOUS CONTACTER</legend>
                        <p>
                            Pour nous faire parvenir votre suggestion, veuillez 
                            remplir tous les champs obligatoires sur le formulaire.
                        </p>
                <legend>CONTACT INFORMATION</legend>
                <ul>
                        <li>
                            34, Av Mwepu, C/L'shi Haut-Katanga, R.D.Congo
                        </li>

                        <li>
                                0972205224
                        </li>
                        
                        <li>
                            Ouvert tous les jours 24/24h
                        </li>
                </ul>
                      <legend>RÉSEAUX SOCIAUX</legend>
        </div>
     <div class="col-lg-8">
            <legend>veuillez remplir le formulaire.</legend>
                <form>
            <div class="form-group">
                   <input type="text" class="form-control" style="height: 40px; width: 700px;" type="date" placeholder="Nom">
            </div>
            <div class="form-group">
                  <input type="email" class="form-control" style="height: 40px; width: 700px;" type="date"" placeholder="Email">
            </div>
            <div class="form-group">
                   <input type="text" class="form-control"style="height: 200px; width: 700px;" type="date" placeholder="Message">
            </div>
           <button type="submit" class="btn btn-primary"> Envoyer</button>
         </form>
        </div>
    </div>
            <hr>
          <div class="row">
            <div class="col-lg-12">
            <?php require "comptenent/footer.php"; ?>   
            </div>

          </div>   
        </div>
    <script src="public/js/bootstrap.js"></script>
     <script src="public/jquery/jquery.js"></script>
     <script>$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})</script>
</body>
</html>
