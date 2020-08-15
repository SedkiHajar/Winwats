<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if((!empty($_FILES["image"]["name"]))AND (!empty($_FILES["filePdf"]["name"]))) { 
        // Get file info
        $disc=$_POST['discription'];
        $titre=$_POST['titre'];
        $pdfName=basename($_FILES["filePdf"]["name"]); 
        $pdfType=pathinfo($pdfName, PATHINFO_EXTENSION);
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','pdf'); 
        if((in_array($fileType, $allowTypes)) AND (in_array($pdfType,$allowTypes))){ 
            $image = $_FILES['image']['tmp_name']; 
            $pdf=$_FILES['filePdf']['tmp_name']; 
            $pdfContent= addslashes(file_get_contents($pdf)); 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (image,uploaded,filePdf,discription,titre) VALUES ('$imgContent',NOW(),'$pdfContent','$disc','$titre')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
<a href="view.php">view</a>