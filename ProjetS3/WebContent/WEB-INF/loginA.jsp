<!DOCTYPE html>
<html>
<head>
	<title>LoginA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/loginA.css"> 
</head>
<body>
<section class="container-fluid bg">
<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">
	    <form method="post" action="loginA" class="form-container">
	      <div class="caption text-center">
		    <h3> Connexion</h3>
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse Email</label>
		    <input type="email" class="form-control" name="mail" placeholder="Entrez votre email" required="required" >
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Mot de passe</label>
		    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required" >
		  </div>
		  
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
		  </div>
		  
		  <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
		</form>
	</section>
</section>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
