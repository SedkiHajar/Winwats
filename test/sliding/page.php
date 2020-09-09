<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 //$nomCat= $_POST['nomCat'];
if (isset($_GET['cat'])){
	$nomCat=$_GET['cat'];

 

// Get image data from database 
$result = $db->query("SELECT p.image,p.description,p.titre FROM images i, produit p where i.id=p.idCat and i.titre=$nomCat "); 
?>




  <?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
    <div class="container p-5">
    <div class="row">
        <?php while($row = $result->fetch_assoc()){ ?> 
        	<div class="col-lg-6 mb-3 mb-lg-0">
            <img width="50%" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
             
           <?php echo '<br>' .$row['titre'] ?>
            
            <?php echo '<br>' .$row['description'] ?>
            <a href="page1.php?spe='<?php echo $row['titre'] ?>'">plus d'info</a>
            <?php  } ?> 

          </div>
    
</div> 
</div> 
</div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } }?>  




</body>
</html>