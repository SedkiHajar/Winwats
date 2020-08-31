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







</body>
</html>