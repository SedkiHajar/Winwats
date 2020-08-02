<!DOCTYPE html>
<html>
<head>
	<title>Entreprise</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/entreprise.css"> 
	<%@include file="menuE.jsp"%>
</head>
<body>
<section class="container-fluid bg">
<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">
	    <form method="post" action="entreprise" class="form-container">
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Nom</label>
		    <input type="text" class="form-control" name="nom"  placeholder="Entrez le nom de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Prenom</label>
		    <input type="text" class="form-control" name="prenom"  placeholder="Entrez le prenom de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Poste</label>
		    <input type="text" class="form-control" name="poste"  placeholder="Entrez le poste de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Adresse domicile</label>
		    <input type="text" class="form-control" name="adresse"  placeholder="Entrez l'adresse de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Latitude</label>
		    <input type="number" step="0.0000000001" class="form-control" name="lat"  placeholder="Entrez l'adresse de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEntreprise">Longitude</label>
		    <input type="number" step="0.0000000001" class="form-control" name="lng"  placeholder="Entrez l'adresse de l'employé">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" name="mail"  placeholder="email@example.com">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Shift</label>
		    <input type="text" class="form-control" name="shift" placeholder="Entrez le shift de l'employé">
		  </div>
		  <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
		</form>
	</section>
</section>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




