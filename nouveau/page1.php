<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Image Magnifier</title>
    <link rel="stylesheet" href="src/jquery.exzoom.css">
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
<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
// Get image data from database 
$titre=$_GET['titre'];
$id=$_GET['id'];
$result = $db->query("SELECT * FROM imageprod WHERE titre='$titre'");
$resu = $db->query("SELECT * FROM produit WHERE  titre='$titre' "); 


?>
<?php if($result->num_rows > 0){ ?>
    <div class="gallery"> 
    <div class="container p-5">
    <div class="row">
        	<div class="exzoom" id="exzoom">
              <div class="exzoom_img_box">
                 <ul class='exzoom_img_ul'  >
                   <?php while($row = $result->fetch_assoc()){ ?> 
                    <li><img  src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" alt="..."  >
                    </li> <?php  } ?> 
                 </ul>
              </div>
              <div class="exzoom_nav"></div> 
            </div>

            <?php while($row = $resu->fetch_assoc()){ ?> 
            <div class="trending" style="margin-left: 520px;margin-top: 5px;">  
           <h1><span style="color:#F9C010;"><?php echo '<br>' .$row['titre'] ?> </span> </h1>
            
            <p><span style="color:#1B8CC6;"><?php echo '<br>' .$row['description'] ?> <!--<a href="pdf.php?id=<?php //echo ($row['id']); ?>">pdf</a>--></span></p>
<?php  } ?>
            
           
            </div>

          
    
    </div> 
    </div> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php }?>  

 </div>

<section id="footer" style="background: #92BDE7 !important;margin-top:450px;">
     
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


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="src/jquery.exzoom.js"></script>
    

    <script>
        $(function(){

            $("#exzoom").exzoom({

            // thumbnail nav options
            "navWidth": 60,
            "navHeight": 60,
            "navItemNum": 5,
            "navItemMargin": 7,
            "navBorder": 1,

            // autoplay
            "autoPlay": false,

            // autoplay interval in milliseconds
            "autoPlayTimeout": 2000
            
            });

        });
    </script>
<?php //include 'footer.php';  ?>

</body>
</html>