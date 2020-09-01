
<?php include 'sendform.php';  ?>

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
 
    <div class=forma >
  	<div class="uppage">
    <h1>Formation</h1>
  </div>
  	<!--image de formation-->
  	<div class="container">
  		<img src="images/accueil.jpg" class="img-fluid" alt="Responsive image">
	<!--paragraphe-->
	<div class="paragraphe container">
	<div class="container">
	<p><br><br>
      En tant que fabricant, nous participons à de nombreux salons mais organisons également chaque mois des présentations de produits et des formations. Si vous souhaitez y participer, n’hésitez pas à nous écrire à l’adresse marketing@duotecno.be. Après deux jours de formation, vous pourrez raccorder et programmer vous-même le système Duotecno. Notre défi consiste à FACILITER autant que possible la vie de l’installateur afin qu’il puisse terminer son installation le plus RAPIDEMENT possible. Notre logiciel de configuration est par conséquent connu pour la simplicité de son interface utilisateur. La présence de notre système unique de liaison autonome (« autobinding ») permet de réaliser la configuration d’une manière très RAPIDE et SANS ERREUR. Chez Duotecno, malgré les nombreuses possibilités, la programmation reste malgré tout un exercice aisé.
      	<br><br>
      Duotecno investit pleinement dans les « Duotecno Partners » sous forme de formations, présentations communes, présentations de produits, etc. Objectif : mettre en place une collaboration durable entre le fabricant et l’installateur à travers des contacts directs. C’est la seule manière pour les deux parties d’être et de rester performantes dans un marché en rapide évolution tel que la domotique, ainsi qu’en témoigne la très grande stabilité qui caractérise la liste d’installateurs avec lesquels Duotecno travaille. Les maîtres d’ouvrage seront également contents de savoir que votre installateur a été formé pour utiliser le système que vous souhaitez et qu’il a eu l’occasion de se familiariser avec ce système. Outre ces formations mensuelles, nous disposons également de notre propre service technique afin d’épauler les partenaires Duotecno sur le chantier
      <br><br>
      <b>Quelques informations pratique en rapport avec nos formations :</b>
      <br><br>
      Il y a une formation de base mensuelle et de temps en temps une formation constamment perfectionnée.
       <br><br>
		  Le cours de base commence à 9h00 et dure jusqu’a à 17h30<br><br>
     	Le cours avancé commence à 9h00 et dure jusqu’a à 15h30
        
  <br><br>
   </p>
  </div>
   </div>
   
     <!--formulaire  -->
     <div class="formulaire container">
     <div class="container" id="cont">
      <br>
      
      <h4 class="sent-notification"><?php echo $alert;?></h4>
    <form action="#cont"  id="myform" role="form" method="post" enctype="multipart/form-data">
      <br>
    	 <h4 class="">Inscrivez vous</h4> 
  		<div class="form-row">
    		<div class="form-group col-md-6">
    			<label for="nom">Nom</label>
      			<input type="text" class="form-control" id="nom" name="nom" required>
    		</div>
   	   	    <div class="form-group col-md-6">
      			<label for="adresse">Adresse</label>
     	    	<input type="text" class="form-control" id="inputPrenom" name="adresse" required>
    		</div>
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-6">
    			<label for="code">Code Postal</label>
      			<input type="text" class="form-control" id="code" name="code" required>
    		</div>
   	   	    <div class="form-group col-md-6">
      			<label for="ville">Ville</label>
     	    	<input type="text" class="form-control" id="ville" name="ville" required>
    		</div>
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-6">
    			<label for="email">E-mail</label>
      			<input type="email" class="form-control" id="email" name="email" required>
    		</div>
   	   	    <div class="form-group col-md-6">
      			<label for="tel">Téléphone</label>
     	    	<input type="tel" class="form-control" id="tel" name="tel" required>
    		</div>
        <div class="form-group col-md-6">
            <label for="societe">Société</label>
            <input type="text" class="form-control" id="societe" name="societe" required>
        </div>
        <div class="form-group col-md-6">

        <label for="date">Dates disponibles</label>
               <select type="select" id="date" class="form-control" name="date" required>
                  <option></option>
                <option>Matin</option>
                <option>Aprem</option>
              </select>


              </div>
              <div class="form-group col-md-6">
            <label for="somme">7+2</label>
            <input type="number" class="form-control" id="somme" name="somme" required>
        </div>
    	</div>
    	<div class="form-row">
    		<div class="form-group col-md-12">
            <label for="inputMessage">Message</label>
    		<textarea class="form-control" id="inputMessage" rows="4" name="msg" required></textarea>
 	    </div>
 	    
            
   	   	    <!--<div class="form-check ">
     			 <input class="form-check-input" type="checkbox" value="chekkkkkkk" id="gridCheck">
     			 <label class="form-check-label" for="gridCheck"> Je souhaite m'abonner à la newsletter de Duotecno</label> 
             </div>
             <div class="form-check ">
     			 <input class="form-check-input" type="checkbox" value="chekkkkkkk" id="gridCheck">
     			 <label class="form-check-label" for="gridCheck"> Je souhaite m'abonner à la newsletter de Duotecno</label> 
             </div>
         </div>
    	</div>-->
  	 </div>
  <button name="submit" type="submit" class="btn btn-warning">Envoyer</button>
</form>
</div> <br>
</div>

</div>

<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null,null,window.location.href);
    }
  </script>


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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <?php //include 'footer.php';  ?>
  </body>
</html>