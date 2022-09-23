<?php 
include 'config.php';
global $con;
session_start();

if(!isset($_SESSION['email'])){
  header('location:login.php');
  exit();
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LES LOGEMENTS</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class = "container-fluid " id ="fg">
      <div class="form-group">                                                                        
        <h1>
           BIENVENUE DANS L'UNIVERS DES LOGEMENTS 
        </h1>
        <h2>
           LES LOGEMENT 
        </h2>
       </div>
       </div>
       <div class = "container-fluid " id ="fg">
         <div class="form-group" >
         <h4>
             Avez-vous un compte? sinon veillez vous inscrire. si oui connectez vous 
         </h4>
                <a href="logout.php" >Deconnection</a>
                <a href="login.php" >Connexion</a> 
                <a href="enregistrement.php" >S'inscrire </a>
         </div>
    </div>  
  </body>
</html>