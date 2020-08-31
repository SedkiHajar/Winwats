<?php include 'sendemail.php';  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>WINWATS</title>
    <link rel="stylesheet" href="css/styles.css" />
    
     
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
      <li class="nav-item  dropdown  ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUITS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <ul class="list-group list-group-horizontal-sm">
          <a  style="text-decoration: none;"class="list-group-item" href="produit.php?genre=smart"><h5>SMART HOME</h5><img height="200" src="images/a.png" ></a>
          <a style="text-decoration: none;"class="list-group-item" href="produit.php?genre=safety"><h5>SAFETY SYSTEM</h5><img height="200"src="images/b.png"></a>
          <a style="text-decoration: none;"class="list-group-item" href="produit.php?genre=green"><h5>GREEN ENERGY</h5><img height="200" src="images/c.png"></a>
        </ul>
        </div>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="index.php" >ACCUEIL <span class="sr-only">(current)</span></a>
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
    <!-- nav<-->
   
    <!-- end nav -->
    


    <section id="main" style="margin-top: -60px; ">
        <div id="Carousel" class="carousel slide" data-ride="carousel" >
          <ol class="carousel-indicators" >
            <li data-target="#Carousel" data-slide-to="0" class="active" ></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
            <li data-target="#Carousel" data-slide-to="3"></li>
            <li data-target="#Carousel" data-slide-to="4"></li>
            <li data-target="#Carousel" data-slide-to="5"></li>
            <li data-target="#Carousel" data-slide-to="6"></li>
            <li data-target="#Carousel" data-slide-to="7"></li>
            

          </ol>
          <div class="carousel-inner">
            <div  class="carousel-item carousel-image-1 active"  ><img src="images/s.png" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  left:-200px;top:30px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead"> Paul Bennett : « Le design est dans les détails »</p>
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-2 " ><img src="images/e.jpg" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  top:10px;left:-500px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead">Steve Jobs : « La créativité consiste à connecter les choses »</p>
                  
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-3 "  ><img src="images/ip1.jpeg" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  top:-40px;left:-400px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead">Pablo Picasso : « Everything you can imagine is real »</p>
                  
                </div>
              </div>
            </div>
          
          <div class="carousel-item carousel-image-4 " ><img src="images/ip2.png" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  top:10px;left:-500px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead">Nous mettons à profit notre expertise et notre créativité <br>pour vous aider à réaliser les maisons et les bâtiments intelligents de vos rêves.</p>
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>
                </div>
              </div>
            </div>


            <div class="carousel-item carousel-image-5 " ><img src="images/ip3.jpeg" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  top:-30px;right:-400px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead">Nous sommes un distributeur exclusif
des produits d'origine belge<br>
avec des solutions innovatives</p>
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>
                </div>
              </div>
            </div>

            <div class="carousel-item carousel-image-6 " ><img src="images/ip4.jpeg" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-center mb-5" style="position:absolute;
  top:-30px;right:-400px;">
                  <h1 class="display-3 h-color">SmartHome</h1>
                  <p class="lead">Nous mettons à profit notre expertise et notre créativité <br>pour vous aider à réaliser les maisons et les bâtiments intelligents de vos rêves.</p>
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>
                </div>
              </div>
            </div>



          <div class="carousel-item carousel-image-7 "  ><img src="images/slide4.png" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5" style="position:absolute;
  top:50px;">
                  <h1 class="display-3 h-color">Safety System</h1>
                  <p class="lead">Nos Objectifs sont le Confort et la sécurité Total de vous et Vos Logements.</p>
                  <!--<button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>-->
                </div>
              </div>
            </div>
          

          <div class="carousel-item carousel-image-8 "  ><img src="images/slide5.png" class="img-responsive" style="width:100%" />
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5" style="position:absolute;
  top:50px;">
                  <h1 class="display-3 h-color">Green energy</h1>
                  <p class="lead">Notre équipe possède une solide expérience dans la pose de panneaux solaires.</p>
                  <!--<button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>-->
                  
                </div>
              </div>
            </div>



          <!--<div class="carousel-item carousel-image-8 "  style="background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4));
    background-image:url('images/slide5.jpg');
    background-size: cover;
    height:800px;height: 750px;">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5" style="position:absolute;
  top:50px;">
                  <h1 class="display-3 h-color">Green energy</h1>
                  <p class="lead">Notre équipe possède une solide expérience dans la pose de panneaux solaires.</p>
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-1s">Catalogue</button>
                  
                </div>
              </div>
            </div>-->


          </div>

    
          <!--<a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
    
          <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>-->
        </div>
      </section>

    <!--<div
      id="carouselExampleControls"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active slide-one "data-interval="7000" >
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h1 style="color: #F9C010;"class="animated fadeInLeft delay-1s">Smarthome</h1>
                <p style="color: white;" class="animated lightSpeedIn delay-2s">
                  Nous mettons à profit notre expertise et notre créativité pour vous aider à réaliser les maisons et les bâtiments intelligents de vos rêves.
                </p>
                
                  <button  onclick="window.location.href = 'files/duotecno.pdf';" type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
               
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/test.png" class="pic-one animated zoomIn delay-1s " />-->




                  <!--comment<img src="images/sic-2.png" class="pic-two animated fadeInLeft delay-4s" />
                  <img src="images/sic-3.png" class="pic-three animated fadeInUp delay-3s" />
                  <img src="images/pic-4.png" class="pic-four animated fadeInDown delay-3s" />
                  <img src="images/pic-5.png" class="pic-five animated fadeInRight delay-4s" />
                  <img src="images/pic-6.png" class="pic-six animated jackInTheBox delay-5s" />-->
                <!--</div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item slide-two " data-interval="7000">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1 style="color: #F9C010;" class="animated fadeInLeft delay-1s">Safety System</h1>
                    <p style="color: white;" class="animated lightSpeedIn delay-2s">
                      Nos Objectifs sont le Confort et la sécurité Total de vous et Vos Logements.
                    </p>
                    <button type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/sic-1.png" class="pic-two animated zoomIn delay-1s " />-->
                      <!--comment<img src="images/img-2.png" class="img-two animated fadeInLeft delay-4s" />
                      <img src="images/img-3.png" class="img-three animated zoomIn delay-3s" />
                      <img src="images/img-4.png" class="img-four animated fadeInDown delay-3s" />
                      <img src="images/img-5.png" class="img-five animated fadeInRight delay-4s" />-->
    
                    <!--</div>
                  </div>
                </div>
          </div>
        </div>
        <div class="carousel-item slide-three"data-interval="7000">
            <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h1 style="color: #F9C010;" class="animated fadeInLeft delay-1s">Green energy</h1>
                    <p style="color: white;" class="animated lightSpeedIn delay-2s">
                      Notre équipe possède une solide expérience dans la pose de panneaux solaires.
                    </p>
                    <button type="button" class="animated jackInTheBox delay-3s">Catalogue</button>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/sic-1.png" class="pic-three animated zoomIn delay-1s" />-->
                      <!--comment<img src="images/img-2.png" class="img-two animated fadeInLeft delay-4s" />
                      <img src="images/img-3.png" class="img-three animated zoomIn delay-3s" />
                      <img src="images/img-4.png" class="img-four animated fadeInDown delay-3s" />
                      <img src="images/img-5.png" class="img-five animated fadeInRight delay-4s" />-->
    
                   <!-- </div>
                  </div>
                </div>
        </div>
      </div>

      
      <a
        class="carousel-control-prev"
        href="#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>-->
    

    <!--Service Section==========-->
      <section id="services" class="services py-5 text-center">
          <div class="container">
              <div class="row">
                <h3 style="color: #06629C;" class="text-center">La société WINWATS se distingue au Maroc par une offre globale de solutions clés en main dans les domaines de domotique, contrôle d’accès, système incendie, anti-intrusion et énérgie renouvelable.
                  <br>Nous vous invitons à découvrir la diversité de nos produits et services, et nous restons à votre disposition pour vous accompagner avec des études précises d'implantation et de coûts relatives à votre besoin réel.</h3>
                  <!--Single Service-->

                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                         <a ><i class="fas fa-medal"></i>  </a>                         
                      </span>
                      <div class="grow">
                   <a  class="font-weight-bold text-uppercase" ><h5 style="color: #F9C010;">CONFORT</h5></a>
                   </div>
                      <h4 class="text-center " style="color: #06629C;" >Au travail, dans votre fauteuil, pendant un
                         voyage…, contrôlez quand vos appareils
                         électroniques, systèmes d’éclairage ou
                        systèmes de chauffage depuis votre
                         ordinateur, tablette ou Smartphone,
                            n’importe ou et n’importe quand.<br>
                          Un système domotique contribue a
                          un confort de vie plus élevé</h4>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
      
                       <a ><i class="fas fa-battery-full"></i> </a>                        
                    </span>
                   <div class="grow">
                   <a  class="font-weight-bold text-uppercase"><h5 style="color: #F9C010;">ECONOMIE D'ENERGIE</h5></a>
                   </div>
                 <h4 class=" text-center" style="color: #06629C;">Les solutions de domotique permettent une meilleure gestion de l'énergie, d'où des économies d'énergie importantes.<br>
                  En réduisant la consommation énergétique, vous diminuez le recours aux énergies fossiles traditionnelles et les émissions de gaz à effet de serre qui résultent de leur exploitation.</h4>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <a ><i class="fas fa-lock"></i>  </a>                          
                    </span>
           <div class="grow">
                   <a class="font-weight-bold text-uppercase"><h5 style="color: #F9C010;">SÉCURITÉ</h5></a>
                   </div>
           <h4 class="text-center" style="color: #06629C;">Pour les contrôles d’accès, seules les personnes habilitées à accéder à une zone pourront y parvenir.<br> La traçabilité et l’analyse statistique font partie intégrante de la réflexion sécuritaire d’un site.</h4>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
        <!--Contact us Section-->
       <!--Contact US-->
       
    <section id="contact" class="contact py-5">
      <div class="container">
        <h1 class="brand"><span>NOUS</span> Contacter</h1>
        <div class="wrapper animated bounceInLeft">
            <div class="company-info">
                <h3>Nos informations</h3>
                <ul>
                    <li><i class="fa fa-road "></i><br> 46, Bd Zerktouni 2ème étage App6 - Casablanca<br>
                                                 Showroom: 66 Hay Fath 3 rue n:4 Ain Chock Casablanca</li>
                    <br><li><i class="fa fa-phone"></i><br> +212552-4744 </li>
                    <br><li><i class="fa fa-envelope"></i><br> info@winwats.com</li>
                </ul>
            </div>

          <!--alert message start-->
          
          <!--alert message end-->






            <div class="contacter">
                <!--<h3>Email Me</h3>-->
                <h4 class="sent-notification"><?php echo $alert;?></h4>
                <form action="#contact"  id="myform" role="form" method="post" enctype="multipart/form-data">
                    <p>
                        <label for="nom">Nom</label>
                        <input required=""  type="text" name="nom">
                    </p>
                    <p>
                        <label for="adresse">Adresse</label>
                        <input  required=""  type="text" name="adresse" id="adresse">
                    </p>
                    <p>
                        <label for="code">Code postal</label>
                        <input  required="" type="text" name="code" id="code">
                    </p>
                    <p>
                        <label for="ville">Ville</label>
                        <input  required=""  type="text" name="ville" id="ville">
                    </p>
                    <p>
                        <label for="email">E-mail</label>
                        <input  required=""  type="email" name="email" id="email">
                    </p>
                    <p>
                        <label for="tel">Téléphone</label>
                        <input required="" type="tel" name="tel" id="tel">
                    </p>
                    <p>
                        <label for="societe">Société</label>
                        <input required=""  type="text" name="societe" id="societe">
                    </p>
                    <p>
                        <label for="suis">Je suis</label>
                        <select  type="select" name="suis" id="suis" required>
                           <option ></option>
                           <option >Installateur</option>
                           <option >Client</option>
                           <option >Architect</option>
                        </select>
                    </p>
                    <p class="full">
                        <label for="msg">Message</label>
                        <textarea required="" class="form-control" name="msg" id="msg" cols="30" rows="5"></textarea>
                    </p>
                    <p class="full">
                        <button name="submit" class="send-btn" type="submit" >Envoyer</button>
                    </p>
                </form>

            </div>
        </div>
    </div>
  </section>
  <!--End of Contact Section-->
       <!--Footer-->
   
  
  <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
  </script>
  <!--<script type="text/javascript">
    function sendEmail(){
      var nom=$("#nom");
      var email=$("#email");
      var societe=$("#societe");
      var msg=$("#msg");

      if(isNotEmpty(nom)&&isNotEmpty(email)&&isNotEmpty(societe)&&isNotEmpty(msg)){
        $.ajax({
          url:'sendEmail.php',
          method: 'POST',
          dataType: 'json',
          data:{
            name:nom.val(),
            email:email.val(),
            societe:societe.val(),
            msg:msg.val()
          }, success: function(response){
            $('#myform')[0].reset();
            $('#sent-notification').text("message sent successfully.");

          }
        });
      }
    }
    function isNotEmpty(caller){
      if(caller.val()==""){
        caller.css('border','1px solid red');
        return false;
      }
      else
      {
        caller.css('border', '');
        return true;
      }
    }
  </script>-->
  <section id="footer" style="background: #92BDE7 !important;">
     <hr width="100%" color="white">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="https://www.facebook.com/winwats"><i class="fa fa-facebook" style="color: white;"></i></a></li>
            <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"style="color: white;" ></i></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/winwat.s"><i class="fa fa-instagram"style="color: white;" ></i></a></li>
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
  
  </body>
</html>
