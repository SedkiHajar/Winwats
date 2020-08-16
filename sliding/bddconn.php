<?php //session_start();

function dbconn(){

try{
     $bdd=new PDO ('mysql:host=localhost;dbname=winwat;charset=utf8','root','');
     $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     return $bdd;
    }
catch(Exception $e)
 { //en cas erreur
   echo "Erreur :" .$e->getMessage();

 }  
}
 //echo 'connexion <br>';

?>
