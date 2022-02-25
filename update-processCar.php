<?php
if(count($_POST)>0){
include 'mydbCon.php';
$query = "UPDATE voitures set n_mat='" . $_POST['n_mat'] . "', marque='" . $_POST['marque'] . "', modèle='" . $_POST['modèle'] . "', prix_location='" . $_POST['prix_location'] . "' WHERE n_mat='" . $_POST['n_mat'] . "'"; // update form data from the database
 if (mysqli_query($dbCon, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }
}
header ("Location: voiture.php?msg=".$msg."");
?>