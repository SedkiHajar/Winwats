<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT * FROM images "); 
?>

<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img width="30px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  /> 
            <object data="data:application/pdf;base64,<?php echo base64_encode($row['filePdf']) ?>" type="application/pdf" ></object>
            <?php echo '<br>' .$row['discription'] ?>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>