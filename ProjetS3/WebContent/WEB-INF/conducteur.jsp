<!DOCTYPE html>
<html>
<head>
	<title>Conducteur</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/transport.css">
	<%@include file="menuT.jsp"%>
</head>
<body>
<section class="container-fluid bg">
<section class="row justify-content-center">
	<section class="col-12 col-sm-6 col-md-3">
	    <form method="post" action="Conducteur" class="form-container ">		  
		  <div class="form-group">
		    <label for="exampleInputNom">Nom du conducteur</label>
		    <input type="text" class="form-control" name="nom" placeholder="Entrez le Nom du conducteur">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPrenom">Prenom du conducteur</label>
		    <input type="text" class="form-control" name="prenom" placeholder="Entrez le Prenom du conducteur">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Num�ro t�l�phone du conducteur</label>
		    <input type="number" class="form-control" name="numTel" placeholder="Entrez le Num�ro t�l�phone du conducteur">
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