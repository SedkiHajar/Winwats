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
<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 //$nomCat= $_POST['nomCat'];
if (isset($_GET['spe'])){
	$nom=$_GET['spe'];

 

// Get image data from database 
$result = $db->query("SELECT * FROM produit where titre=$nom "); 
?>




  <?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
    <div class="container p-5">
    <div class="row">
        <?php while($row = $result->fetch_assoc()){ ?> 
        	<div class="exzoom" id="exzoom">
              <div class="exzoom_img_box">
                 <ul class='exzoom_img_ul'>
                    <li><img width="500px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  />
                    </li>
                 </ul>
              </div>
              <div class="exzoom_nav"></div> 
            </div>


            <div class="trending" style="margin-left: 120px;">  
           <h1><?php echo '<br>' .$row['titre'] ?></h1>
            
            <h2><?php echo '<br>' .$row['description'] ?></h2>
            
            <?php  } ?> 
            </div>

          
    
    </div> 
    </div> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } }?>  

 </div>
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


</body>
</html>