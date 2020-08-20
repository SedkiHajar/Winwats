<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error';
     if((!empty($_FILES["image"]["name"]))AND (!empty($_POST['nom']))AND (!empty($_POST['genre']))) {  
        // Get file info
        $disc=$_POST['discription'];
        $nom=$_POST['nom'];
        $genre=$_POST['genre'];
        // Allow certain file formats
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into caregories(image,description,nom,genre)VALUES('$imgContent','$disc','$nom','$genre')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            } 
        } 
     else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    }    
 }
 
// Display status message 
echo $statusMsg; 
?>
<a href="form.html">form</a>