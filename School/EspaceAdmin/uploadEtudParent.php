<?php
// Include the database configuration file
require_once '../database/dbConfig.php';

// If file upload form is submitted
$status = $statusMsg = '';
$choix=$_GET['choix'];


  $status = 'error';

    // code...

  ;
        // Get info for prospect
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['adresse'];
        $codeP=$_POST['codeP'];
        $email =$_POST['email'];
        $villeN= $_POST['villeN'];
        $anneeS= $_POST['anneeS'];
        $dateN= $_POST['dateN'];
        $sexe= $_POST['sexe'];
        $tel= $_POST['tel'];
        $classe= $_POST['classe'];
        $CIN=str_replace(' ', '', $_POST['CIN']);


          // Get info for parent
        $nomP=$_POST['nomP'];
        $prenomP=$_POST['prenomP'];
        $adresseC=$_POST['adresseP'];
        $telP=$_POST['telP'];
        $emailP =$_POST['emailP'];
          $image = $_FILES['image']['tmp_name'];
        // insert prospect
          if ($choix=='insertion') {
            $CIN=$_GET['CIN'];
        for ($j = 0; $j <count($nom); $j++)
            {
            echo $image;
          $imgContent = addslashes(file_get_contents($image[$j]));

         $insert = $db->query("INSERT into etudiant(image,nom,prenom,adresse,codePostal,mail,villeN,anneeS,dateN,sexe,tel,classe,CIN) VALUES ('$imgContent','$nom[$j]','$prenom[$j]','$adresse[$j]','$codeP[$j]','$email[$j]','$villeN[$j]','$anneeS[$j]','$dateN[$j]','$sexe[$j]','$tel[$j]','$classe[$j]','$CIN[$j]')");
        if($insert){
                $status = 'success';
                $statusMsg = "prospect upload successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
            }
            }


            if ($choix=='delete') {
                $CIN=$_GET['CIN'];
              // code...
            // delete section
            $sql = "DELETE FROM etudiant WHERE CIN='$CIN'";

            if ($db->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $db->error;
            }
          }
          else {


          $sql = "UPDATE etudiant SET nom='$nom',prenom='$prenom',adresse='$adresse',codePostal='$codeP',mail='$email',villeN='$villeN',anneeS='$anneeS',dateN='$dateN',sexe='$sexe',tel='$tel',classe='$classe'WHERE CIN='$CIN'";
          echo $CIN;
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