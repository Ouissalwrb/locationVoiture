<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     $n_mat = $_POST['n_mat'];
     $marque = $_POST['marque'];
     $modèle = $_POST['modèle'];
     $prix_location = $_POST['prix_location'];
   
 
     $query = "INSERT INTO voitures (n_mat,marque,modèle,prix_location)
     VALUES ('$n_mat','$marque','$modèle','$prix_location')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: voiture.php?msg=".$msg."");
?>