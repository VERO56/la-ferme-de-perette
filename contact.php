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
        
    </head>
   <? include("header.php");?>
                <!--HEADER
     =============================================== -->
    <body>
        <? include("navbar.php");?>
        <div class="jumbotron jumbotron-sm" style="background-color: #B4DC90">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1">Pérette vous invite à :<small>Prendre contact</small></h1>
                    </div>
                </div>
            </div>
         </div>
            <div class="container" style="background-color: #B4DC90">
            <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form style="background-color: #B4DC90">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nom</label>
                                    <input type="text" class="form-control" id="name" placeholder="Entrer votre nom" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Votre adresse mail</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Sujet</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                    placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Envoyer votre message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                <legend><span class="glyphicon glyphicon-globe"></span> Nos coordonnées</legend>
                <address>
                    <strong>La ferme de Pérette</strong><br>
                    10 rue de l'abreuvoir<br>
                    28000 LA LOUPE<br>
                    <abbr title="Téléphone">
                        P:</abbr>
                    02 37 37 02 02
                </address>
                <address>
                    <strong>Email :</strong><br>
                    <a href="mailto:#">ferme.perette@gmail.com</a>
                </address>
                </form>
            </div>
        </div>
        </div>
    </body>
    <? include("footer.php");?>
</html>    