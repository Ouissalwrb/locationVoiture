<?php
if(count($_POST)>0){
include 'mydbCon.php';
$query = "UPDATE client set cin='" . $_POST['cin'] . "', nom='" . $_POST['nom'] . "', prenom='" . $_POST['prenom'] . "', adresse='" . $_POST['adresse'] . "', tel='" . $_POST['tel'] . "',idville='" . $_POST['idville'] . "' WHERE cin='" . $_POST['cin'] . "'"; // update form data from the database
 if (mysqli_query($dbCon, $query)) {
    $msg = 2;
 } else {
    $msg = 4;
 }
}
header ("Location: client.php?msg=".$msg."");
?>