<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
// Get image data from database 
$id=$_GET['id'];
$result = $db->query("SELECT * FROM produit WHERE id=$id "); 
?>
<?php if($result->num_rows > 0){ ?>
    
         <?php while($row = $result->fetch_assoc()){ ?> 
            <object width="100%" height="100%" data="data:application/pdf;base64,<?php echo base64_encode($row['filePDF']) ?>" type="application/pdf" ></object>
                 <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>