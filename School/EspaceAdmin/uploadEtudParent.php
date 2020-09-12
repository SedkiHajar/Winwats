<?php
// Include the database configuration file
require_once '../database/dbConfig.php';

// If file upload form is submitted
$status = $statusMsg = '';

    $status = 'error';
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
        $CIN= $_POST['CIN'];

          // Get info for parent
        $nomP=$_POST['nomP'];
        $prenom=$_POST['prenomP'];
        $adresseC=$_POST['adresseP'];
        $telP=$_POST['telP'];
        $emailP =$_POST['emailP'];
            $image = $_FILES['image']['tmp_name'];
        // insert prospect
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

          // insert prospect




// Display status message
echo $statusMsg;
?>
<a href="view.php">view</a>
