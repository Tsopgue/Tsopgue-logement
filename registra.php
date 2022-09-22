<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eenregistrement</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  
</head>
<body>
    <?php 
        include 'config.php';
        global $con;
        $con = getConnection();
        if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],$_POST['conf'])){
            $nom = $_POST['nom'];
            $prenom= $_POST['prenom'];
            $email= $_POST['email'];
            $password =$_POST['password'];
            $conf = $_POST['conf'];
            $sql = "INSERT INTO `save`( `nom`, `prenom`, `email`, `password`) VALUES ('$nom','$prenom','$email','$password')";
            $result =$con->query($sql);
        if($result){
            header("location: login.php");
          }
        }
    ?>
    <form  class =" col-lg-40 " action="" method="post" enctype="application/x-www-formurlencoded">
                  <div class = "container-fluid " id ="fg">
                     <div class ="container" id ="fg">
                        <div class="form-group">
                           <legend > Entrez les données à enregistrer </legend >
                        </div> 
                <div class="row">
                  <div class="body">
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" name="nom" id = "nom" class="form-control" placeholder="Entrer le nom" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Prenom:</label>
                        <input type="text" name="prenom" id = "prenom" class="form-control" placeholder="Entrer le prénom " required>
                    </div>
                    <div class="form-group">
                        <label for="email"  >Email:</label>
                        <input type="Email" name="email" id = "email" class="form-control"   placeholder="Entrer l'email'" required>
                        </div>
                    <div class="form-group">
                        <label for="Password" >Password:</label>
                        <input type="password" name="password" id = "password" class="form-control"  placeholder="Entrer le mot de pass" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordConf" >Confirmer Password:</label>
                        <input type="password"  name="conf" id ="conf" class="form-control"  placeholder="confirmer le mot de pass" required>
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
               <div>
                   <a href="login.php"> connexion </a>
               </div>
             </div>
           </div>
          </div>
      </form>
    </body>
</html>