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
    <style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display:block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  /*transition: .5s ease;*/
  background-color: #F9C010;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<nav class="navbar navbar-expand-lg  " >
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
    
  
  
    
     
        </div><a class="btn-nav   nav-link" href="index.php#contact">NOUS CONTACTER</a>
     
      <!--<li class="nav-item">
        <a class="btn-nav   nav-link" href="#">login</a>
      </li>-->
    
  </div>
</nav>


     <?php 
     $genre=$_GET['genre'];
// Include the database configuration file  
require_once 'dbConfig.php'; 
// Get image data from database 
$result = $db->query("SELECT * FROM caregories WHERE genre='$genre'"); 
?>
<?php if($result->num_rows > 0){ ?>  
    <div class="row" style="margin-left: 100px;margin-right: 100px;">
      
       <?php while($row = $result->fetch_assoc()){ ?> 
      <!-- DEMO 1 Item-->
      <div class="col-lg-4 mb-4 mb-lg-0 " >
      <a href="voirplus.php?id=<?php echo ($row['id']); ?>"><div class="container"style="margin-bottom: 20px; ">
  <img style=""  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><?php echo '<br>' .$row['nom']; ?></div>
  </div>
  </div></a>
      
   </div>   
        <?php } ?> 
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