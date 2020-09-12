<?php
 require_once '../database/dbConfig.php';
 $CIN=$_GET['CIN'];
// sql to delete a record
$sql = "DELETE FROM etudiant WHERE CIN='$CIN'";

if ($db->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $db->error;
}
?>
