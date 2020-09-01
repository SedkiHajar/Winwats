<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>WINWATS</title>
     <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>" />
     
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.min.css">
    <!-- google fony-->
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
  </head>
  <body>

<nav class="navbar navbar-expand-lg  bg-light">
  <a class="navbar-brand" href="index.php" >
    <img src="images/logo.png" width="70" height="50" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
          <a class="nav-link" href="index.php" >ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item  dropdown  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUITS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <ul class="list-group list-group-vertical-sm">
          <a  style="text-decoration: none;"class="list-group-item" href="produit.php?genre=smart"><p>SMART HOME</p></a>
          <a style="text-decoration: none;"class="list-group-item" href="produit.php?genre=safety"><p>SAFETY SYSTEM</p></a>
          <a style="text-decoration: none;"class="list-group-item" href="produit.php?genre=green"><p>GREEN ENERGY</p></a>
        </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="showroom.php">SHOWROOM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formation.php" >FORMATION</a>
      </li>
  </div>
        <a class="btn-nav   nav-link" href="index.php#contact">NOUS CONTACTER</a>
      <!--<li class="nav-item">
        <a class="btn-nav   nav-link" href="#">login</a>
      </li>-->
    </ul>
</nav>


<div class="showa" id="showa"> 
      <div class="uppage" style="padding: 60px; margin-bottom: 40px;
  background-image: linear-gradient( #92BDE7 , #92BDE7);">
        <h1>Showroom</h1>
      </div>
      <div class="txt container ">
      <div class="row">
            <div id="desc" class="col-sm col-md-12 col-lg-12">
              <p>

                    <span> Notre  équipe expérimentée réfléchit en permanence à la question de savoir comment encore améliorer nos solutions domotiques perfectionnées.</span> <span>Au fil des ans, nous nous sommes bâtis une solide réputation sur les plans de la qualité et de l’innovation. </span><br><br><span>Dans notre showroom vous pourrez découvrir les derniers techniques et nos produites domotiques intelligentes, un must si vous avez des projets de construction ou de rénovation.</span><br><br><span> Vous êtes installateur ou architecte. Nous vous accueillerons alors volontiers, ainsi que vos clients dans notre espace sensoriel inspirant : vous pourrez y avoir et vous familiariser avec tous derniers modèles d’écrans tactiles, d’interrupteurs, de capteurs, de détecteurs et d’interfaces et bien d’autres choses encore.</span><br><br>
                    <span>Prenez rendez-vous en adressant un courriel à info@winwats.com ou appelez-nous sur les numéros : <spam style="color: #F9C010;"> +212 5 2252-4744</spam> ou <spam style="color: #F9C010;"> +212 6 6138-4807</spam>. </span>

              </p>
            </div>
           
            <div class="col-sm col-md-12 col-lg-12">
                <div id="showroom" class="carousel slide carousel-fade" data-ride="carousel">
                  <ol style="" class="carousel-indicators">
                      <li data-target="#showroom" data-slide-to="0" class="active"></li>
                      <li data-target="#showroom" data-slide-to="1"></li>
                      <li data-target="#showroom" data-slide-to="2"></li>
                      <li data-target="#showroom" data-slide-to="3"></li>
                      <li data-target="#showroom" data-slide-to="4"></li>
                     
                  </ol>
                      <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <img src="images/showroom2.jpg" width="100%" height="100%" alt="...">
                            </div>
                           
                            <div class="carousel-item">
                                    <img src="images/er.jpg" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                                    <img src="images/ep.jpg" width="100%" height="100%" alt="...">
                            </div>

                            <div class="carousel-item">
                                     <img src="images/showroom1.jpg" width="100%" height="100%" alt="...">
                            </div>
                            <div class="carousel-item">
                                     <img src="images/showroom3.jpeg" width="100%" height="100%" alt="...">
                            </div>
                      </div>
                </div>
           
           </div>
      </div>
      </div>
    </div>
    
  <section id="footer" style="background: #92BDE7 !important;margin-top:70px;">
     
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook" style="color: white;"></i></a></li>
            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"style="color: white;" ></i></a></li>
            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"style="color: white;" ></i></a></li>
            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fab fa-linkedin"style="color: white;" ></i></a></li>
          </ul>
        </div>
        <hr>
      </div>  
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6 text-center">©Copyright WINWATS.</p>
        </div>
        <hr>
      </div>  
    </div>
  </section>


<?php //include 'footer.php';  ?>

</body>
</html>