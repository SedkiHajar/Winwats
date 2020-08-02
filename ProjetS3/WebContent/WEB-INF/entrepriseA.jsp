<%@ page pageEncoding="UTF-8" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>entrepriseA</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/MesEmployes.css">
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/Accueil.css">
<link rel="stylesheet" type="text/css" href="css/fixed.css">
<%@include file="menuA.jsp"%>
</head>
<body>

       
        <div class="container ">
  		<div class="row align-items-start">
		<c:forEach var="utilisateur" items="${ utilisateurs }">
		 <div class="[ col-sm-4  col-md-4]">
				<div class="[ info-card ]">
					<img style="width: 100%" src="img/accueil.jpg">
					<div class="[ info-card-details ] animate">
						<div class="[ info-card-header ]">
							<h1> <c:out value="${ utilisateur.nomE }  " />  </h1>
							<h3> <c:out value="${ utilisateur.mail }  " /> </h3>
						</div>
						<div class="card-footer">
						<a href="Position" > <input type="button" class="btn btn-secondary center float-center  " value="Afficher les employés"> </a>
						<a href="Accueil" > <input type="button" class="btn btn-secondary center float-center  " value="Supprimer cette entreprise"> </a>
                       
                        
                    </div>
						</div>
					</div>
				</div>
				 </c:forEach>
			</div>
    	</div>	
    	
	
       
      
</body>
</html>
	