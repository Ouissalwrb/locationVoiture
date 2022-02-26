<?php
// foo.php
$errors = array (
    1 => "L'enregistrement a été inséré avec succès",
    2 => "L'enregistrement a été mis à jour avec succès",
    3 => "L'enregistrement a été supprimé avec succès",
    4 => "Erreur de base de données MySQL. Veuillez vérifier votre requête",
);
$error_id = isset($_GET['msg']) ? (int)$_GET['msg'] : 0;
if ($error_id != 0 && in_array($error_id, [1,2,3,4])) {
    echo $errors[$error_id];
}else{
    echo 'Agence de location';
}
?>