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
            <hr>
             <div class="row">
                <div class="col-lg-12 text-danger">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                 <h3 class="text-primary"><i>Contacter nous</i></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="">
                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Votre courriel">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Nom">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Prenom">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Fonction">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Adresse">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Ville">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Telphone">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Civilite">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 40px; width: 450px;" type="text" placeholder="Fax">
                        </p>

                        <p>
                            <input  class="form-control" style="height: 150px; width: 450px;" type="text" placeholder="Message">
                        </p>

                        
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="uitk-flex uitk-flex-row uitk-flex-justify-content-space-between uitk-flex-wrap uitk-flex-item ">
                        <div class="uitk-flex uitk-flex-nowrap uitk-switch uitk-checkbox">
                                    <input type="checkbox" id="loginFormRememberMeCheck" name="rememberMe" class="uitk-flex-item uitk-flex-shrink-0 replay-reveal" value="">
                                    <span aria-hidden="true" class="uitk-flex-item uitk-flex-shrink-0 uitk-switch-control"></span>
                                    <div class="uitk-flex-item uitk-flex-grow-1 uitk-switch-content">
                                    <label class="uitk-checkbox-switch-label uitk-switch-label" for="loginFormRememberMeCheck">Rester connecté</label>
                            </div>
                         </div>
                     </div>
                </div>
            </div>
                <div class="row">
                  <div class="col-lg-12">
                    <p>
                        J'ai pris connaissance et j'accepte la politique de confidentialité.
                        En validant ce formulaire, vous consentez à ce que vos données personnelles soient 
                        traitées par Le nom du cabinet responsable du traitement, pour la gestion et le suivi de 
                        votre demande de contact. À ces fins les champs visés par un astérisque sont obligatoires. Pour en savoir plus sur vos droits ainsi que nos traitements et pratiques en matière de 
                        données personnelles, cliquez sur notre politique de confidentialité.
                    </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-primary">
                              Envoyer
                        </button>
                    </div>
                </div>
                <div class="row">
                 <div class="row">
                    <div class="col-lg-12 text-light">
                        <marquee behavior="" direction=""><i>Contacter Nous</i></marquee>
                    </div>
                </div>
              <hr>
           </div> 
           
           <?php require "comptenent/footer.php"; ?>      
        </div>
    <script src="public/js/bootstrap.js"></script>
     <script src="public/jquery/jquery.js"></script>
     <script>$('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})</script>
</body>
</html>
