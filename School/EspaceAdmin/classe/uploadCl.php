<?php
// Include the database configuration file
require_once '../../database/dbConfig.php';
error_reporting(0);
// If file upload form is submitted

$status = $statusMsg = '';



  $status = 'error';

    // code...

  ;
        // Get info for prospect
        if (isset($_POST['inserer']))  {
        $nomC=$_POST['nomC'];
        $nomM=$_POST['nomM'];
        $CIN=$_POST['CIN'];
        $coef=$_POST['coef'];
        echo 'je suis le Cin' . $CIN[1];
         // insert Matiere
      for ($i = 0; $i <count($nomM); $i++)

      {      

             $TableCIN[$i]=$CIN[$i];
             $insert = $db->query("INSERT into matiere(nom,coef) VALUES ('$nomM[$i]','$coef[$i]')");

             if($insert){
               $db->query($insert);
               printf ("New Matiere has id %d.\n", $id_Matiere=$db->insert_id);
               $id_Matieres[$i] =$id_Matiere;
               

                     $status = 'success';
                     $statusMsg = "Mat upload successfully.";
                 }else{
                     $statusMsg = "File upload failed, please try again." . $db->error;
                 }

      }
                echo $TableCIN[1].  'ECHOOOOOO';
            // insert Classe
            for ($j = 0; $j <count($nomC); $j++)
    {
          $insert = $db->query("INSERT into classe(nom) VALUES ('$nomC[$j]')");
          if($insert){
          $db->query($insert);

          printf ("New Classe has id %d.\n", $id_Classe=$db->insert_id);
                $status = 'success';
                $statusMsg = "Classe upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again." . $db->error;
            }                
         
          // insert MToisieme table
    for ($t = 0; $t <count($id_Matieres); $t++)
    {   
            $insert = $db->query("INSERT into matclass(id_Mat,id_Class,id_prof) VALUES ('$id_Matieres[$t]','$id_Classe','$TableCIN[$t]')");
            if($insert){
              $db->query($insert);
                    $status = 'success';
                    $statusMsg = "bien wldi upload successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again." . $db->error;
                }

                echo $TableCIN[$t] .'fffffffffffffffff';
 } }




            }

 
           

           if(isset($_POST['modifier'])) {
               $id=$_GET['id'];
               $nomC=$_POST['nomC'];
              

          $sql = "UPDATE classe SET nom='$nomC' WHERE id='$id'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
                 header('Location:gestionClMatProf.php');
              
               }

         


             if($_GET['choix']=='delete') {
                $id=$_GET['id'];
              // code...
            // delete section
            $sql = "DELETE FROM classe WHERE id='$id'";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
             header('Location:gestionClMatProf.php');
          } 


          if($_GET['choix']=='modifiercl') {
            echo 'eeeeeee';
               $id_Class=$_GET['id_Class'];
               $id_Mat=$_GET['id_Mat'];
               $id_prof=$_GET['id_prof'];
               $coef=$_POST['coef'];
               $nomM=$_POST['nomM'];
               $CIN=$_POST['CIN'];

          $sql = "UPDATE matclass SET id_Mat='$nomM' AND id_prof='$CIN' WHERE id_Class='$id_Class' ";
          
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
              }



           if($_GET['choix']=='supprimer') {
                $id_Mat=$_GET['id_Mat'];
                $id_Class=$_GET['id_Class'];
                $id_prof=$_GET['id_prof'];
              // code...
            // delete section
            $sql = "DELETE FROM matclass WHERE id_Mat='$id_Mat' AND id_Class='$id_Class' AND id_prof='$id_prof' ";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
              header('Location:InfoClMatProf.php?id_Class=$id_Class');
            } else {
              echo "Error deleting record: " . $db->error;
            }

          } 





         


           if((isset($_POST['insert'])) AND $_GET['choix']=='modifier') {
               $id=$_GET['id'];
               $nomC=$_POST['nomC'];
                echo $nomC.'PRRR';

          $sql = "UPDATE classe SET nom='$nomC' WHERE id='$id'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
              }
         
         





        
          








// Display status message
echo $statusMsg;
?>
<a href="view.php">view</a>
