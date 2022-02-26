<?php

include('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Ajouter un client</h2>
            </div>
           
            <form action="insert-process.php" method="post">
                <div class="form-group">
                    <label>CIN</label>
                    <input type="text" name="cin" class="form-control" required="">
                </div>                        
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Prenom</label>
                    <input type="text" name="prenom" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Adresse</label>
                    <input type="text" name="adresse" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Tell</label>
                    <input type="text" name="tel" class="form-control" required="">
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
                        <option value=""> Choisir  </option> 
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