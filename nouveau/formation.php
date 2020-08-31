
<?php include 'sendform.php';  ?>
<?php include 'header.php';  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Css-->
    <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>" />
    <!-- awsome icone-->
     
     <!-- google fony-->
     <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>Index</title>
  </head>
  <body>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <?php include 'footer.php';  ?>
  </body>
</html>