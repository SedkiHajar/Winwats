<?php
// Include the database configuration file
require_once '../../database/dbConfig.php';

// If file upload form is submitted

$status = $statusMsg = '';



  $status = 'error';

    // code...

  ;
        // Get info for prospect
      
        $nom=$_POST['nom'];
        
        // insert prospect
          if (isset($_POST['inserer']))  {
          
        for ($j = 0; $j <count($nom); $j++)
            {
            

         $insert = $db->query("INSERT into matiere(nom) VALUES ('$nom[$j]')");
        if($insert){
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again." . $db->error;
            }
            }
            }

           

           if(isset($_POST['modifier'])) {
               $id=$_GET['id'];
          $sql = "UPDATE matiere SET nom='$nom' WHERE id='$id'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
              }



             if($_GET['choix']=='delete') {
                $id=$_GET['id'];
              // code...
            // delete section
            $sql = "DELETE FROM matiere WHERE id='$id'";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
          }
          








// Display status message
echo $statusMsg;
?>
<a href="view.php">view</a>
