<?php
    include ("php/bd_connexion.php");
    $infos_num = $_GET['v'];
    $infos_clients = $bdd->query("SELECT * FROM informations_clients WHERE type_information ='$infos_num'");
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Dr Malki</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">

    <!-- new -->
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <style>.icon-lifesaver{color: #5b7b3c;}</style>
  </head>
    
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="acceuil.html">FATIMA MALKI</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="" href="acceuil.html">Acceuil</a></li>
              
              <li class="dropdown"><a class="" href="nos_services.html">Nos services</a></li>
                
              <li class="dropdown"><a class="" href="informations_patients.php">Informations patients</a></li>
                
              <li class="dropdown"><a class="" href="videos_utiles.php">Videos utiles</a></li>
            </ul>
          </div>
        </div>
      </nav>
        
        <div class="main">
            <section class="module" style="background-image: url(css/img/img8.jpeg);">
              <div class="container">
                  <h2 class="module-title font-alt">Informations patients</h2>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row post-masonry post-columns" style="position: relative; height: 1464px;">
                      
                    <?php    
                        while ($infos=$infos_clients->fetch()) {
                            
                        if($infos['fichier']=='null'){$fichier=false;}else{$fichier=true;}
                            
                            if($fichier){$lien='http://app.cabinet-drmalki.com/production/php/gestion_siteweb/fichier_uploaded/'.$infos['fichier'];}
                            else{$lien=$infos['lien'];}
                            
                        echo '<div class="col-md-4 col-lg-4" style="position: absolute; left: 0px; top: 0px;">
                        <div class="post">
                          <div class="post-header font-alt">
                            <h2 class="post-title" style="font-size:14pt;color:#5b7b3c;">'.$infos['titre'].'&nbsp;&nbsp;&nbsp;<span class="fa fa-download"></span></h2>
                          </div>
                          <div class="post-more"><a class="more-link" href="'.$lien.'" target="_blank">Plus informations</a></div>
                        </div>
                      </div>'; }
                        ?>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        <hr class="divider-w">
            
        <div class="module-small bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-3">
                <div class="widget">
                  <h5 class="widget-title font-alt">Contactez-nous</h5>
                  <p>161, avenue mohamed 5 App 2, Kenitra</p>
                  <p>Fix : 05 37 36 09 91</p>
                  <p>Email :<a href="#"> drmalki@live.fr</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">CABINET DOCTEUR MALKI FATIMA</a></p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="https://www.facebook.com/Drmalkifatima/"><i class="fa fa-facebook"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRxkIYIk6oqSQD4asPnJH0R7lYOC7yGik&callback=initMap">
      </script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>