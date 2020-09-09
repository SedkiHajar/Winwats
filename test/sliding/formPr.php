<?php
require_once 'bddconn.php'; ?>

<form action="uploadPr.php" method="post" enctype="multipart/form-data">


    
<p>Saisir votre categorie:</p><select class="form_ctr" name="cat" >
           
          <?php
 
            function cat(){
             

                        $conn=dbconn();
                   $sql=$conn->prepare('SELECT * from images ');
               $sql->execute();
               $ans=$sql->setFetchMode(PDO::FETCH_ASSOC);
                 while($pace=$sql->fetch()){
                  extract($pace);

                  echo "<option value='$id'>$titre</option>";
                              }
                     }
                           cat();
          ?>
        </select>



    <p><label>Select Image :</label><input type="file" name="image"></p>
    <!--<p><label>Select Pdf:</label><input type="file" name="filePdf"></p>-->
     <p><label>titre:</label><input type="text" name="titre"></p>
    <p><label>description:</label><input type="text" name="description"></p>
    <input type="submit" name="submit" value="Upload">
</form>


