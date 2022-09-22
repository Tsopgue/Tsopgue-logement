<?php
      include 'config.php';
           $con = getconnection();
if(isset($_POST['nom'],$_POST['description'])){
            $nom = $_POST['nom'];
            $description = $_POST['description'];
            $sql = " UPDATE type_logement SET nom_type = '$nom' , description = '$description' WHERE id_type = $_GET['id'] ";
            $result = $con->query($sql);
       if($result){
        header("location: index.php");
       }}
        ?> 