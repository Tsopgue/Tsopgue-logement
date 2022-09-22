
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoutons</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  
</head>
<body>
    <?php 
      include 'config.php';
      global $con;
      $con = getConnection();
      if(isset($_POST['nom'],$_POST['description'])){
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $sql = "INSERT INTO `type_logement`( `nom_type`,`description`) VALUES ('$nom','$description')";
            $result = $con->query($sql);
       if($result){
        header("location: index.php");
       }
      }
     ?>
    <form  class =" col-lg-40 " action="" method="post" enctype="application/x-www-formurlencoded">
                  <div class = "container-fluid " id ="fg">
                        <div class="form-group">
                           <legend > Entrez les données à ajouter </legend >
                        </div> 
                    <div class="row">
                    <div class="body">
                        <div class="form-group">
                        <label for="exampleDataList" class="form-label">Nom_type</label>
                        <input type="text" class="form-control" list="datalistOptions" name="nom" id = "nom" placeholder="choisir un type de logement" required>
                            <datalist id="datalistOptions">
                                <option  value="Appartement">
                                <option  value="studio">
                                <option  value="chambre">
                            </datalist>
                       </div>
                    </div>
                       <div class="form-group">
                            <label for="name">Description:</label>
                            <textarea name="description" id = "description" class="form-control" placeholder = "Enter la description" required></textarea>
                       </div>
                  </div>
                     <br/>
                    <div class="form-group" id = "bti">
                            <button type="reset" class="btn btn-danger" >Annuler</button>
                            <button type="submit" class="btn btn-success" id="submit"> Envoyer </button>
                    </div>
                   <?php 
                        if(!empty($message)){
                            echo $message;
                        }
                   ?>
              </div>
           </div>
      </form>
    </body>
</html>