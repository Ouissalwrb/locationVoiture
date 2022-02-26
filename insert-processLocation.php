<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     $cin_client = $_POST['cin_client'];
     $marque_v = $_POST['marque_v'];
     $modele_v =  $_POST['modele_v'];
     $n_mat = $_POST['n_mat'];
     $date_debut = $_POST['date_debut'];
     $date_retour = $_POST['date_retour'];
     $prix_location = $_POST['prix_location'];


     $debutDate =strtotime($date_debut);
     $retourDate =strtotime($date_retour);

     $equation = ($retourDate-$debutDate)/60/60/24;
   
     $prix_a_payer = $equation * $prix_location;

     $query = "INSERT INTO location (cin_client,marque_v, modele_v, n_mat,date_debut,date_retour, prix_a_payer)
     VALUES ('$cin_client','$marque_v','$modele_v', '$n_mat','$date_debut','$date_retour','$prix_a_payer')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: location.php?msg=".$msg."");
?>