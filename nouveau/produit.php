<?php include 'sendemail.php';  ?>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light " >
    <a class="navbar-brand" href="index.php" >
    <img src="images/logo.png" width="40" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    WINWATS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" >ACCUEIL <span class="sr-only">(current)</span></a>
      </li>
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
      <li class="nav-item">
        <a class="nav-link" href="showroom.php">SHOWROOM</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formation.php" >FORMATION</a>
      </li>
      
    </ul>
    
  
  
    
     
        </div><a class="btn-nav   nav-link" href="index.php#contact">CONTACTEZ-NOUS</a>
     
      <!--<li class="nav-item">
        <a class="btn-nav   nav-link" href="#">login</a>
      </li>-->
    
  </div>
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




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
  </body>
  <?php include 'footer.php';  ?>
</html>