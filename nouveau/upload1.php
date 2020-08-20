<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if((!empty($_FILES["image"]["name"]))) { 
        // Get file info
        $disc=$_POST['discription'];
        $titre=$_POST['titre'];
        $idcat=$_POST['idcat'];
        $fileName = $_FILES["image"]["name"]; 
        $fileType =  $_FILES["image"]["type"]; 
         
        // Allow certain file formats 
         
            $image = $_FILES['image']['tmp_name'];   
            for ($j = 0; $j <count($image); $j++)
            {
                $imgContent = addslashes(file_get_contents($image[$j]));
            // Insert image content into database 
            $insert = $db->query("INSERT into produit(image,description,titre,idcat) VALUES ('$imgContent','$disc','$titre','$idcat')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  }
        
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<a href="view.php">view</a>