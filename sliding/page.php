<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 echo $nomCat= $_GET['nomCat'];
// Get image data from database 
$result = $db->query("SELECT p.image,p.description FROM images i, produit p where i.id=p.idCat and i.titre='food' "); 
?>




              <?php if($result->num_rows > 0){ ?> 
            <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img width="30px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
            
            <?php echo '<br>' .$row['description'] ?>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>  