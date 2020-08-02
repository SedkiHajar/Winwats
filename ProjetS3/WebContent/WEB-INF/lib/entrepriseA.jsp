<%@ page pageEncoding="UTF-8" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>LES ENTREPRISES</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/entrepriseA.css">
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
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-secondary float-right btn-sm">show</button>
                        </div>
                        </div>
					</div>
				</div>
	    </c:forEach>
	    </div>
</div>	
						
						
						
						
						
						
						
						
						
						
						

<c:forEach var="utilisateur" items="${ utilisateurs }">
<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/200/150/?random">

                    <div class="card-block">
                        <figure class="profile">
                            <img src="https://picsum.photos/200/150/?random" class="profile-avatar" alt="">
                        </figure>
                        <h4 class="card-title mt-3">Tawshif Ahsan Khan</h4>
                        <div class="meta">
                            <a>Friends</a>
                        </div>
                        <div class="card-text">
                            Tawshif is a web designer living in Bangladesh.
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Last updated 3 mins ago</small>
                        <button class="btn btn-secondary float-right btn-sm">show</button>
                    </div>
                </div>
                </c:forEach>
</div>




      
</body>
</html>
	