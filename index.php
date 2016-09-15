<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <style type="text/css">
    body { background:#B4DC90 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<!-- NAVBAR
================================================== -->
 <?php include("header.php");?>
  <!--HEADER
  =============================================== -->
  <body>
   <?php include("navbar.php");?>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="./images/la_ferme1.jpg" alt="First slide"> 
          <div class="container">
            <div class="carousel-caption">
              <h1>La ferme de Pérette</h1>
              <p>Vous accueille du lundi au samedi  </p>
              <p><a class="btn btn-lg btn-primary" href="contact.html" role="button">Venez nous voir !</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="./images/cow.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Devenez sponsors !</h1>
              <p>Sponsorisez nos vaches et obtenez des réductions</p>
              <p><a class="btn btn-lg btn-primary" href="sponsoring.html" role="button">Inscrivez-vous!</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="./images/cow1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Achetez nos produits :</h1>
              <p>Visitez notre boutique en ligne</p>
              <p><a class="btn btn-lg btn-primary" href="produits.html" role="button">Accéder</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="./images/fromage1_1.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>Fromages</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-default" href="produits.html" role="button">Voir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./images/yaourt.jpeg" alt="Generic placeholder image" width="140" height="140">
          <h2>Yaourts</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
          <p><a class="btn btn-default" href="produits.html" role="button">Voir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="./images/fblanc.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Fromages blancs</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper.</p>
          <p><a class="btn btn-default" href="produits.html" role="button">Voir &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">La Ferme de Pérette <span class="text-muted">Au coeur du Perche</span></h2>
          <p class="lead">Découvrez la ferme de Pérette et profitez de la vente en ligne de ses fromages fermiers. La ferme de Pérette, située dans le département de l'Eure et Loire, vous propose des produits frais et préparés sur place.</p>
        </div>
        <div class="col-md-5">
      
          <img class="img-circle" src="./images/ferme.jpg" alt="Generic placeholder image" width="400" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Envie de produits frais?<span class="text-muted">Voyez vous-même !</span></h2>
          <p class="lead">Nous vous proposons des fromages affinés, au lait cru, des yaourts, fromages blancs... visitez notre boutique en ligne.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="img-rounded" src="./images/plaitier.jpg" alt="Generic placeholder image" width="400" height="250">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Sponsorisez une de nos vaches ! <span class="text-muted">Le choix !</span></h2>
          <p class="lead">Choisissez la vache que vous préférez, sponsorisez-la, et recevez des bons de réduction...</p>
        </div>
        <div class="col-md-5">
         <img class="img-circle" src="./images/vache.jpg" alt="Generic placeholder image" width="400" height="250"> 
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     <?php include("footer.php");?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
