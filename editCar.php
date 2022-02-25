<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit and Update Data PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
  <div class="page-header">
      <h2>Update Data From Database PHP</h2>
  </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'mydbCon.php';
            $query = "SELECT * FROM voitures WHERE n_mat='" . $_GET["n_mat"] . "'";  // Fetch data from the table customers using id
            $result=mysqli_query($dbCon,$query);
            $voiture = mysqli_fetch_assoc($result);
            ?>
            <form action="update-processCar.php" method="POST">
              <input type="hidden" name="n_mat" value="<?php echo $_GET["n_mat"]; ?>" class="form-control" required="">
              <div class="form-group">
                <label for="exampleInputEmail1">Marque</label>
                <input type="text" name="marque" class="form-control" value="<?php echo $voiture['marque']; ?>" required="">
              </div>                
              <div class="form-group">
                <label for="exampleInputEmail1">Modele</label>
                <input type="text" name="modèle" class="form-control" value="<?php echo $voiture['modèle']; ?>" required="">
              </div>              
              <div class="form-group">
                <label for="exampleInputEmail1">Prix Location</label>
                <input type="text" name="prix_location" class="form-control" value="<?php echo $voiture['prix_location']; ?>" required="">
              </div>

              <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </form>
        </div>
    </div>        
</div>
</body>
</html>