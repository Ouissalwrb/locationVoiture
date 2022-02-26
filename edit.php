<?php

include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier le client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
  <div class="page-header">
      <h2>Modifier le client </h2>
  </div>
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'mydbCon.php';
            $query = "SELECT * FROM client WHERE cin='" . $_GET["cin"] . "'";  // Fetch data from the table customers using id
            $result=mysqli_query($dbCon,$query);
            $client = mysqli_fetch_assoc($result);
            ?>
            <form action="update-process.php" method="POST">
              <input type="hidden" name="cin" value="<?php echo $_GET["cin"]; ?>" class="form-control" required="">
              <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" name="nom" class="form-control" value="<?php echo $client['nom']; ?>" required="">
              </div>                
              <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" name="prenom" class="form-control" value="<?php echo $client['prenom']; ?>" required="">
              </div>              
              <div class="form-group">
                <label for="exampleInputEmail1">Adresse</label>
                <input type="text" name="adresse" class="form-control" value="<?php echo $client['adresse']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tel</label>
                <input type="text" name="tel" class="form-control" value="<?php echo $client['tel']; ?>" required="">
              </div>
              <div class="form-group">
              <?php 
                    include 'mydbCon.php';
                    $query="select * from departement limit 200"; // Fetch all the data from the table customers
                    $get1=mysqli_query($dbCon,$query);
                           
                            if (mysqli_num_rows($get1) > 0) {

                               ?>      
                    <label>Id Ville</label>
                    <select  class='form-control'value=""   name='idville' required="">
                        <option value=""> Choisier  </option> 
                             <?php  
                                     foreach ($get1 as $row1) {                                         
                                  ?>   
                                   <option value="<?php echo $row1['cod_dep']; ?>"> <?php echo $row1['lic_dep']; ?></option>
                                   <?php
                                                                      }
                                     ?>                 
                     </select>
                     <?php 
                              
                            }else{
                               echo "no data available";
                            }

               ?>
              </div>
              <button type="submit" class="btn btn-primary" value="submit">Soumettre</button>
            </form>
        </div>
    </div>        
</div>
</body>
</html>

<?php

include('footer.php');
?>