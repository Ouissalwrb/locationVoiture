<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert data from form to mysql database php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Add Record From Database PHP</h2>
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
                    <label>Id Ville</label>
                    <input type="text" name="idville" class="form-control" required="">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="save">
            </form>
        </div>
    </div>        
</div>
</body>
</html>