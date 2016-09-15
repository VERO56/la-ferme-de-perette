
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
    body { background:#B4DC90 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
    </style>

    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="jumbotron.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="style.css"> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  
 <? include("header.php");?>
  <!--HEADER
  =============================================== -->
  <body>

    <div class="navbar-wrapper" style="font-size: 40px; background-color: rgb(67,140,60">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <img class="icon" src="./images/iconvache.png" alt="icon"> 
            </div>
            <div id="navbar" class="navbar-collapse collapse" style="background-color: rgb(67,140,60">
              <ul class="nav navbar-nav">
                <li><a href="index.html">ACCUEIL</a></li>
                <li><a href="produits.html">NOS PRODUITS</a></li>
                <li class="active"><a href="sponsoring.html">SPONSORING</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!-- <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div> -->

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <img class="second-slide" style="display: inline-block;" src="./images/vache_spon_1_1_min.jpg" alt="first picture">
          <h2>Légende </h2>
          
          <p>
          <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
          <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;" data-toggle="modal" data-target="#myModal_1_1">View details</button>
            
          <!-- Modal -->
          <div id="myModal_1_1"  " class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img class="second-slide"  src="./images/vache_spon_1_1.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4">
        <img class="second-slide" style="display: inline-block; margin-left: 40px;" src="./images/vache_spon_1_2_min.jpg" alt="Second picture">
          <h2>Labelle </h2>
          
          <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
          <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;"" data-toggle="modal" data-target="#myModal_1_2">View details</button>

          <!-- Modal -->
          <div id="myModal_1_2"  class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body" >
                  <img class="second-slide"  src="./images/vache_spon_1_2.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-4">
        <img class="second-slide" style="display: inline-block; margin-left: 20px;" src="./images/vache_spon_1_3_min.jpg" alt="third picture">
          <h2>Lentille </h2>
          
          <p>
          <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
            <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;" data-toggle="modal" data-target="#myModal_1_3">View details</button>
            
            <!-- Modal -->
          <div id="myModal_1_3" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img class="second-slide"  src="./images/vache_spon_1_3.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>





      <div class="row">
        <div class="col-md-4">
          <img class="second-slide" style="display: inline-block;" src="./images/vache_spon_2_1_min.jpg" alt="first picture">
          <h2>Lorraine </h2>
          
          <p>
            <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
            <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;" data-toggle="modal" data-target="#myModal_2_1">View details</button>
          
          </p>

                    <!-- Modal -->
          <div id="myModal_2_1" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img class="second-slide"  src="./images/vachelq_2_1.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>



        </div>

        <div class="col-md-4">
          <img class="second-slide" style="display: inline-block; margin-left: 40px;" src="./images/vache_spon_2_2_min.jpg" alt="Second picture">
          <h2>Longchamp</h2>
          
          <p>
            <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
            <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;" data-toggle="modal" data-target="#myModal_2_2">View details</button>
          </p>

          <!-- Modal -->
          <div id="myModal_2_2" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img class="second-slide"  src="./images/vache_spon_2_2.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>


        </div>

        <div class="col-md-4">
          <img class="second-slide" style="display: inline-block;" src="./images/vache_spon_2_3_min.jpg" alt="third picture">
          <h2>Liqueur</h2>
          
          <p>
            <button type="button" class="btn btn-default" style="display: inline-block; " data-toggle="modal" data-target="#myModal_sponsoring">Sponsoring</button>
            <button type="button" class="btn btn-default" style="display: inline-block; margin-left: 100px;" data-toggle="modal" data-target="#myModal_2_3">View details</button>
          </p>    
          
          <!-- Modal -->
          <div id="myModal_2_3" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                  <img class="second-slide"  src="./images/vachelq_2_3.jpg" alt="third picture">
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- Modal -->
          <div id="myModal_sponsoring" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Sponsoring</h4>
                </div>
                <div class="modal-body">
                  <p>Le sponsoring est de 30€.</p></br>
                  <p>Cliquer sur Ok pour Valider le sponsoring.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                </div>
              </div>

            </div>
          </div>



        </div>
      </div>

      <hr>

      <? include("footer.php");?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
