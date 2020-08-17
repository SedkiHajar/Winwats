<?php include 'sendemail.php';  ?>
<?php include 'header.php';  ?>
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
   <div class="showa"> 
      <div class="uppage">
        <h1>Showroom</h1>
      </div>
   <?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
// Get image data from database 
$id=$_GET['id'];
$result = $db->query("SELECT * FROM produit WHERE idcat=$id "); 
?>
<?php if($result->num_rows > 0){ ?> 
  <div > 
    <div class="container p-5">
    <div class="row">
       <?php while($row = $result->fetch_assoc()){ ?> 
      <!-- DEMO 1 Item-->
       <?php ?>
        <div class="col-lg-3 mb-3 mb-lg-0 " style="margin-left: 40px;">
       	<div class="card" style="width: 18rem;">
  			<img " width="400" height="300" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" alt="..."  >
  			<div class="card-body">
    			<h5 class="card-title"><?php echo base64_encode($row['titre']); ?></h5>
    			
    			<a href="page1.php?id=<?php echo ($row['id']); ?>" class="btn btn-primary">voir plus</a>
  			</div>
		</div>
		</div>
        <?php } ?> 
    </div>
    </div> 
  </div>
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>
</div> 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <?php include 'footer.php';  ?>
  </body>
</html>