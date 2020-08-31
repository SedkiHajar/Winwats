<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <title>WINWATS</title>
   <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo time(); ?>" />
     
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

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
<div class="showa"> 
      <div class="uppage" style="padding: 60px; margin-bottom: 40px;
  background-image: linear-gradient( #92BDE7 , #92BDE7);">
        <h1>Catégories</h1>
      </div>
   </div>


     <?php 
     $genre=$_GET['genre'];
// Include the database configuration file  
require_once 'dbConfig.php'; 
// Get image data from database 
$result = $db->query("SELECT * FROM caregories WHERE genre='$genre'"); 
?>
<?php if($result->num_rows > 0){ ?> 
  <div class="gallery" > 
    <div class="container p-5">
    <div class="row">
       <?php while($row = $result->fetch_assoc()){ ?> 
      <!-- DEMO 1 Item-->
       <?php ?>
      <div class="col-lg-4 mb-3 mb-lg-0" style="margin-top: 40px;">
      <a href="voirplus.php?id=<?php echo ($row['id']); ?>"><div class="hover hover-1 text-white rounded"><img style="width: 19rem;height :13rem;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <div class="hover-overlay" style="width: 88%;"></div>
        <div class="hover-1-content text-center px-5 py-4">
          <h5 style= "color:" class="hover-1-title text-uppercase font-weight-bold mb-0">
            <span class="font-weight-light" style="text-align: center"><?php echo '<br>' .$row['nom']; ?></span>
          </h5>
          <!--<p class="hover-1-description font-weight-light mb-0"><?php echo '<br>' .$row['description'] ?>
          </p>-->
        </div>
        </div>
      </div>
      </a>
        <?php } ?> 
    </div>
    </div> 
  </div>
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>

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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </body>
  <?php //include 'footer.php';  ?>
</html>