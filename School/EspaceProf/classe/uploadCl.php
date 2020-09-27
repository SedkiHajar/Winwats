<?php
   //session_start();
   require_once '../../database/dbConfig.php';
   include('../session.php');
?>
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




            if(isset($_POST['modifierCours'])) {
               $id_Class=$_GET['id_Class'];
               $id_Mat=$_GET['id_Mat'];
               $id_prof=$_GET['id_prof'];
               $id_Cours=$_GET['id_Cours'];
               $nomCours=$_POST['nomCours'];
               $description=$_POST['description'];
               $file = $_FILES['file']['tmp_name'];
              
                  $fileContent = addslashes(file_get_contents($file));
          $sql = "UPDATE cours SET description='$description',nom='$nomCours',support='$fileContent' WHERE id='$id_Cours'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
                 
              
               }


       if(isset($_POST['modifierDevoir'])) {
               $id_Class=$_GET['id_Class'];
               $id_Mat=$_GET['id_Mat'];
               $id_prof=$_GET['id_prof'];
               $id_Devoir=$_GET['id_Devoir'];
               $nomDevoir=$_POST['nomDevoir'];
               $description=$_POST['description'];
               $file = $_FILES['file']['tmp_name'];
              
                  $fileContent = addslashes(file_get_contents($file));
          $sql = "UPDATE devoir SET description='$description',nom='$nomDevoir',support='$fileContent' WHERE id='$id_Devoir'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
                 
              
               }



               if(isset($_POST['modifierSD'])) {
               
               $id=$_GET['id'];
              
               $file = $_FILES['file']['tmp_name'];
              
                  $fileContent = addslashes(file_get_contents($file));
          $sql = "UPDATE tableSD SET nom='$fileContent' WHERE id='$id'";
          echo $id;
            if ($db->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $db->error;
            }
                 
              
               }




               if(isset($_POST['modifierSC'])) {
               
               $id=$_GET['id'];
              
               $file = $_FILES['file']['tmp_name'];
              
                  $fileContent = addslashes(file_get_contents($file));
          $sql = "UPDATE tableSC SET nom='$fileContent' WHERE id='$id'";
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
            $sql = "DELETE FROM classe WHERE id='$id'";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
             header('Location:gestionClMatProf.php');
          } 





             if($_GET['choix']=='deleteCours') {
                $id_Class=$_GET['id_Class'];
                $id_Mat=$_GET['id_Mat'];
                $id_prof=$_GET['id_prof'];
                $id_Cours=$_GET['id_Cours'];
              // code...
            // delete section
            $sql = "DELETE FROM cours WHERE id_Class='$id_Class' AND id_Mat='$id_Mat' AND id_prof='$id_prof' AND id='$id_Cours' ";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
            
          } 


          if($_GET['choix']=='deleteDevoir') {
                $id_Class=$_GET['id_Class'];
                $id_Mat=$_GET['id_Mat'];
                $id_prof=$_GET['id_prof'];
                $id_Devoir=$_GET['id_Devoir'];
              // code...
            // delete section
            $sql = "DELETE FROM devoir WHERE id_Class='$id_Class' AND id_Mat='$id_Mat' AND id_prof='$id_prof' AND id='$id_Devoir' ";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
            
          } 


           if($_GET['choix']=='deleteSD') {
                
                $id=$_GET['id'];
              // code...
            // delete section
            $sql = "DELETE FROM tableSD WHERE id='$id' ";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
            
          } 

           if($_GET['choix']=='deleteSC') {
                
                $id=$_GET['id'];
              // code...
            // delete section
            $sql = "DELETE FROM tableSC WHERE id='$id' ";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
            
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
         
         


            

       
        
        // insert prospect
          if (isset($_POST['insererCours'])) {

             foreach ($_FILES['file']['name'] as $name ) {
              $file[] =var_dump($name);
              //echo 'nbr fciheirs: ';
              //echo count($file). '<br>';
                   }
            
            $s=0;$total=0;
            $file = $_FILES['file']['tmp_name'];
            //$video = $_FILES['video']['tmp_name'];
            $nom=$_POST['nom'];
            $nbrF=$_POST['nF'];
            //$nbrV=$_POST['nV'];
            $description=$_POST['description'];
            $id_Class=$_GET['id_Class'];
            $id_Mat=$_GET['id_Mat'];
            $id_prof=$_GET['id_prof'];
            //$total+=$nbrF[$j];
            
        for ($j = 0; $j <count($nom); $j++)
            { 
              //echo 'indice cours: '.$j. '  nbre fiche de  : '.$j .'est :'.count($file).'<br>';
               

         $insert = $db->query("INSERT into cours(nom,description,id_Class,id_Mat,id_prof) VALUES ('$nom[$j]','$description[$j]','$id_Class','$id_Mat','$id_prof')");
         $select= $db->query("SELECT * FROM cours WHERE id_Mat=$id_Mat AND id_Class=$id_Class AND id_prof=$id_prof AND nom='$nom[$j]' ");
           $total+=$nbrF[$j];
             //$total=count($file); echo 'total: '. $total . 'indice cours j: '. $j.'<br>';
              //pppppbpbpb
        //$results = $db->query("SELECT nom FROM matiere WHERE id='$id_Mat'");
        while($row1 = $select->fetch_assoc()){
              $id_Cours[]=$row1['id'];  }
              for($i=$s;$i<$total;$i++){
                //echo ' indice cours: '.$j. '  nbre fiche de cour  : '.$j .'est :'.$nbrF[$j].'<br>';
                //echo 'total: '.$total.'<br>';
                //nbre fichier dans input
             // echo $file .  'indice fichier: '.$i. '  fich : '.$file[$i]. 'couri: '. $id_Cours[$j].'<br>';;
              $fileContent = addslashes(file_get_contents($file[$i]));
              //$videoContent = addslashes(file_get_contents($video[$i]));
         //$id_Cours[] =$id_Cours;
         //echo 'Jjjj '.$id_Cours;
        if($insert){
                $insert1 = $db->query("INSERT into tableSC(nom,id_Cours) VALUES ('$fileContent','$id_Cours[$j]')");
                 if($insert1){
                    $status = 'success';
                    $statusMsg = "prospect upload successfully.";
                    $s+=1;//echo $s;//$total=0;
                 }else{
                    $statusMsg = "File upload failed, please try again." . $db->error;
              }    
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again." . $db->error;
            }
            }//$total+=$nbrF[$j];
            }
          }
            





        if (isset($_POST['insererDevoir'])) {

          

           
            $nom=$_POST['nom'];
            $description=$_POST['description'];
            $id_Cours=$_GET['id_Cours'];
            
      
        for ($j = 0; $j <count($nom); $j++)
            {
             
               

         $insert = $db->query("INSERT into devoir(nom,description,id_Cours) VALUES ('$nom[$j]','$description[$j]','$id_Cours')");
        if($insert){
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again." . $db->error;
            }
            }
            }
            

       

         if (isset($_POST['insererSupport'])) {


            //foreach ($_FILES['file']['name'] as $name ) {
              //$file[] =var_dump($name);
              //echo 'nbr fciheirs';
              //echo count($file);
           //}
            
           
            $id_Devoir=$_GET['id_Devoir'];
            $file = $_FILES['file']['tmp_name'];
            $video = $_FILES['video']['tmp_name'];
            echo count($file);
            

      
        for ($j = 0; $j <count($file); $j++)
            {
              
              $fileContent = addslashes(file_get_contents($file[$j]));
              $videoContent = addslashes(file_get_contents($video[$j]));

         $insert = $db->query("INSERT into tableSD(nom,id_Devoir,video) VALUES ('$fileContent','$id_Devoir','$videoContent')");
        if($insert){
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again." . $db->error;
            }
            }
            }



        
          








// Display status message
echo $statusMsg;
?>
<a href="view.php">view</a>
