<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une nouvelle location</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Ajouter une nouvelle location</h2>
            </div>
           
            <form action="insert-processLocation.php" method="post">
                <div class="form-group">
                    <label>CIN Client</label>
                    <input type="text" name="cin_client" class="form-control" required="">
                </div>                        
                <div class="form-group">
                <?php 
                    include 'mydbCon.php';
                   $query="select * from voitures ";
                   $get1=mysqli_query($dbCon,$query);

                     $location = mysqli_fetch_assoc($get1);

                     $_SESSION['prix_location'] = $location['prix_location'];
                            
                             if (mysqli_num_rows($get1) > 0) {
 
                                ?>      
                    <input type="hidden" name="prix_location" value="<?php echo $_SESSION['prix_location']; ?>" class="form-control" required="">
                    <label>Numero matricule</label>
                    <select  class='form-control'value=""   name='n_mat' required="" >
                        <option value=""> Choisir  </option> 
                              <?php  
                                      foreach ($get1 as $row1) {                                         
                                   ?>   
                        <option value="<?php echo $row1['n_mat']; ?>"> <?php echo $row1['n_mat']; ?></option>
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
                <div class="form-group">
                    <label>Date dubet</label>
                    <input type="date" name="date_debut" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label>Date Retour</label>
                    <input type="date" name="date_retour" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>
</body>
</html>