<?php

include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une nouvelle voiture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Ajouter une nouvelle voiture</h2>
            </div>
           
            <form action="insert-processCar.php" method="post">
                <div class="form-group">
                    <label>N mat</label>
                    <input type="text" name="n_mat" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Marque</label>
                    <input type="text" name="marque" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Modele</label>
                    <input type="text" name="modèle" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Prix Location</label>
                    <input type="number" step="any" name="prix_location" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Soumettre">
            </form>
        </div>
    </div>        
</div>
</body>
</html>

<?php

include('footer.php');
?>