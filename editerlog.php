<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les Logements</title>
        <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  
    </head>
<body>
<?php
      include 'config.php';
        $con = getConnection();
        $id = $_GET['id'];
        if(isset($_POST['valider'])){
            if(isset($_POST['log'],$_POST['nom'],$_POST['description'])){
                $nom_type = $_POST['log'];
                $nom_logement = $_POST['nom'];
                $description = $_POST['description'];
                $sql = "UPDATE logement SET nom_type='$nom_type',nom_logement='$nom_logement',description='$description' WHERE id_logement=$id";
                $result = $con->query($sql);
                if($result){
                header("location: index1.php");
                }
            }
        }

        if(isset($_GET['id'])){
                
                $sql = "SELECT * FROM logement  WHERE `id_logement` = $id";
                $result = $con->query($sql);
                if($result){
    
                    $num = mysqli_num_rows($result);
               
                if($num == 1){
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    $log= $row['nom_type'];
                    $nom= $row['nom_logement'];
                    $descr = $row['description'];
                   
                }
            }else{
                echo "erreur sur la requete";
            }
        }

     
                
      
?>  
    <form  class =" col-lg-40 " action=" " method="post" enctype="application/x-www-formurlencoded">
                  <div class = "container-fluid " id ="fg">
                        <div class="form-group">
                            <a href="index.php" class = "back-btn"><img src="back.png" alt="" srcset=""></a>
                           <h2 >  modifier les données </h2 >
                        </div> 
                    <div class="row">
                    <div class="body">
                    <div class="form-group">
                            <label for="name">Nom_type:</label>
                            <input type="text" name="log" id="log" class="form-control"  value="<?php  echo $log; ?>">
                       </div>
                        <div class="form-group">
                            <label for="name">Nom_logement:</label>
                            <input type="text" name="nom" id="nom" class="form-control"  value="<?php  echo $nom; ?>">
                       </div>
                       <div class="form-group">
                            <label for="name">Description:</label>
                            <textarea name="description" id = "description" class="form-control"><?php  echo $descr; ?></textarea>
                       </div>
                  </div>
                     <br/>
                     <div class="form-group" id = "bti">
                            <button type="reset" class="btn btn-danger" >Annuler</button>
                            <button type="submit" class="btn btn-success" id="submit" name="valider"> Valider </button>
                    </div>
                  
              </div>
           </div>
      </form>
    </body>
</html>