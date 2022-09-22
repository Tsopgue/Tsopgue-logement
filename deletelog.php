<?php 
        include 'config.php';
      
        $con = getConnection();
        //recuperation de l'id dans le lien
        $id = $_GET['id'];
        if(isset($_GET['id'])){
                
          $req ="DELETE FROM logement WHERE id_logement=$id";
          $result = $con->query($req);
          if($result){
              header("location:index1.php");
          }
        }

        ?>  
    