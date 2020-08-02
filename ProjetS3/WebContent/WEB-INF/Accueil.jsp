<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
    
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ETA</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/Accueil.css">
	<link rel="stylesheet" type="text/css" href="css/fixed.css">
</head>


<body data-spy="scroll" data-target="#navbarResponsive">

<!--- Start Accueil Section -->
<div id="accueil" >
<!--- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"> <img src="img/logo.png"/> </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a class="nav-link" href="#accueil">WINWATS</a>
    	    </li>
    	    <li class="nav-item">
    			<a class="nav-link" href="#espaceA">Smart Home</a>
    	    </li>
    	    <li class="nav-item">
    			<a class="nav-link" href="#espaceE">Safety System</a>
    	    </li>
    	    <li class="nav-item">
    			<a class="nav-link" href="#espaceT">Green Energy</a>
    	    </li>
    	    <li class="nav-item">
    			<a class="nav-link" href="#contact">Contact</a>
    	    </li>
    	</ul>
    </div>	    
</nav>
<!--- End Navigation -->



<!--- Start Landing Page Section -->
<div class="landing">
	<div class="home-wrap">
		<div class="home-inner">
		</div>
	</div>
</div>
<div class="caption text-center">
	<h1>Bienvenue sur notre site</h1>
	<h2>Une meilleure gestion du transport des entreprises</h2>
	<a class="btn btn-outline-light btn-lg" href="#contact">Contactez-nous</a>
</div>	<!--- End Landing Page Section -->

</div>  <!--- End accueil Section -->






<!--- Start espaceA Section -->
<div id="espaceA" class="offset">
<!--- Start Jumbotron -->

<div class="narrow text-center">

 <div class="col-12">
	<h3 class="heading">ESPACE ADMIN</h3>
	<div class="heading-underline"></div>
 </div>
 <div class="row text-center">
    <div class="col-md-12 ">
      <div class="espaceA">
        <p class="lead">Connectez-vous pour gérer votre site!</p>
	    <a class="btn btn-secondary btn-md" href="loginA" >Connexion</a>
      </div>
    </div>
  </div> <!--- End Row -->   
 </div><!--- End Narrow -->

<div class="row">
	<div class="col-md-6 clients">
	<div class="row">
		<div class="col-md-4">
		  <img src="img/hajar.png">
		</div>
		<div class="col-md-8">
	      <blockquote> 
		   <i class="fas fa-quote-left"></i>
	       Notre objectif est d’optimiser le service de transport du personnel en fusionnant les services respectifs des entreprises se situant dans une même zone industrielle, et en identifiants les agglomérats des domiciles des employés.
           <hr class="clients-hr">
           <cite>&#8212; Hajar, Software Engineer</cite>
	      </blockquote>
        </div>
    </div>
    </div>


    
	<div class="col-md-6 clients">
	<div class="row">
		<div class="col-md-4">
		  <img src="img/aya.png">
		</div>
		<div class="col-md-8">
	      <blockquote> 
		   <i class="fas fa-quote-left"></i>
	       Notre projet lie un regroupement des entreprises qui fourniront les informations des domiciles de leurs employés avec les entreprises fournissant les transports,en combinant par la suite les données pour proposer des plans de transports optimisés.
           <hr class="clients-hr">
           <cite>&#8212; Aya, Software Engineer</cite>
	      </blockquote>
        </div>
    </div>
    </div>


</div>
</div><!--- End espaceA Section -->






<!--- Start espaceE Section -->
<div id="espaceE" class="offset">
<div class="fixed-background">
<div class="row dark text-center">
	<div class="col-12">
		<h3 class="heading">Espace Entreprise</h3>
		<div class="heading-underline"></div>
		<br></br>
    </div>     
    <div class="col-md-6">
    	<div class="feature">
    		<i class="fas fa-address-card fa-3x"></i>
        </div>
        <a class="btn btn-secondary btn-md" href="registerE" >Inscription</a>
        <br></br>
    	<div class="feature">
    		<h1 class="lead">Si vous etes une entreprise appartenant à un regroupement de société,n'hésitez pas de vous inscrire en remplissant un formulaire, aprés validation de votre accés par l'Admin,vous aurez la possibilité de gérer vos employés qui bénéficieront par la suite d'un service de ransport optimisés.</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div class="feature">
    		<i class="fas fa-wifi fa-3x"></i>
        </div>
        <a class="btn btn-secondary btn-md" href="loginE" >Connexion</a>
        <br></br>
        <div class="feature">
    		<h1 class="lead">Connectez-vous pour gérer vos employés</h1>
    </div>
</div> <!--- End Row Dark --->
    <div class="fixed-wrap">
    	<div class="fixed">
        </div>
    </div>
</div> <!--- End Fixed Background --->

</div>
</div>
<!--- End espaceE Section -->





<!--- Start espaceT Section -->
<div id="espaceT" class="offset">
<div class="fixed-background espaceT">
<div class="row dark text-center">
	<div class="col-12">
		<h3 class="heading">Espace Transport</h3>
		<div class="heading-underline"></div>
		<br></br>
    </div>
    <div class="col-md-6">
    	<div class="feature">
    		<i class="fas fa-address-card fa-3x"></i>
        </div>
        <a class="btn btn-secondary btn-md" href="registerT" >Inscription</a>
        <br></br>
    	<div class="feature">
    		<h1 class="lead">Si vous etes une entreprise de service de transport,n'hésitez pas de vous inscrire en remplissant un formulaire, aprés validation de votre accés par l'Admin,vous aurez la possibilité de gérer vos différents transports et conducteurs qui contribuerons par la suite aux trasports des employés.</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div class="feature">
    		<i class="fas fa-wifi fa-3x"></i>
        </div>
        <a class="btn btn-secondary btn-md" href="loginT" >Connexion</a>
        <br></br>
        <div class="feature">
    		<h1 class="lead">Connectez-vous pour gérer vos transports et vos conducteurs</h1>
    </div>
</div> <!--- End Row Dark --->
    <div class="fixed-wrap">
    	<div class="fixed">
    		<hr class="fixed"></hr>
        </div>
    </div>
</div> <!--- End Fixed Background --->

</div>

</div>
<!--- End espaceT Section -->


<!--- Start contact Section -->
<div id="contact" class="offset">
<footer>
<div class="row justify-content-center">
	<div class="col-md-5 text-center">
		<strong>Contact Info</strong>
		<p>(+212)(552-4744)<br>info@winwats.com</p>
		<p>Suivez-nous sur nos réseaux sociaux:</p>
		<a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
		<a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
		<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>
	<hr class="socket">
	&copy; WINWATS 
</div>
</footer>
</div>
<!--- End contact Section -->



<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
<!--- End of Script Source Files -->


</body>
</html>



























