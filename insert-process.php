<?php
if(count($_POST)>0)
{    
     include 'mydbCon.php';
     $cin = $_POST['cin'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $adresse = $_POST['adresse'];
     $tel = $_POST['tel'];
     $idville = $_POST['idville'];
 
     $query = "INSERT INTO client (cin,nom,prenom,adresse,tel,idville)
     VALUES ('$cin','$nom','$prenom','$adresse','$tel','$idville')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } else {
        $msg = 4;
     }
}
  header ("Location: client.php?msg=".$msg."");
?>