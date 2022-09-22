
<?php 
        include 'config.php';
      
        $con = getConnection();
        //recuperation de l'id dans le lien
        $id = $_GET['id'];
        if(isset($_GET['id'])){
                
          $req ="DELETE FROM type_logement WHERE id_type=$id";
          $result = $con->query($req);
          if($result){
              header("location:index.php");
          }
        }

        ?>  