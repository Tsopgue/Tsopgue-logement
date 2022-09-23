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
          BIENVENU <?php echo $_SESSION['email']; ?>
        </h1> 
        <h1>
           MES LOGEMENTS PREFERES 
        </h1>
        <h2>
           MES TYPES DE LOGEMENTS 
        </h2>
    <nav class="navbar navbar-inverse" role="navigation" >
    <div class="container-fluid" >
       <div class="navbar-header" >
            <a class="navbar-brand" href="index.php" >GESTION DES TYPES DE LOGEMENTS</a>
            <a class="navbar-brand" href="index1.php">GESTION  DES LOGEMENTS</a>
       </div>
    </nav>

   <a href="index2.php" >Accueil</a> <br> <br>
        <div class="form-group">
          <a href="ajouter.php" class="btn btn-primary btn-lg float-right" >Ajouter</a>
        </div>
      </div>
          <br>
          <br>
      <div class="form-group"> 
          <table class="table table-striped table-condensed" id = "tableau">  
              <tr>
                <th> id_type </th> 
                <th> type_logement </th> 
                <th> description </th> 
                <th> action </th>
              </tr>
            <?php
                $con = getConnection();
                $sql ="SELECT * FROM type_logement ORDER BY nom_type "; 
                $result =$con->query($sql);
                while($row = mysqli_fetch_array($result))
                 {
                  
            ?>
          <tbody>
            <tr>
              <td><?php echo $row['id_type'] ;?></td>
              <td><?php echo $row['nom_type'] ;?></td>
              <td><?php echo $row['description'] ;?></td>
              <td> 
                <a href="editer.php?id=<?php echo $row['id_type'] ;?>" class = "btn btn-info btn-xs add_data" >Edit</a>
                <a href="delete.php?id=<?php echo $row['id_type'] ;?>" class = "btn btn-danger btn-xs add_data">Delete</a>
              </td>
            </tr>
          </tbody>
          <?php  
            //mysqli_close($con);
            }
          ?>

        </table>
      </div>   
  </body>
</html>