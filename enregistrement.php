<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eenregistrement</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
   
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
                echo '<script language="javascript">';
                echo 'alert("Account created successful")';
                echo '</script>';
            
          }
        }
    ?>
    <form  class =" col-lg-40 " action="" method="post" enctype="application/x-www-formurlencoded">
                  <div class = "container-fluid " id ="fg">
                        <div class="form-group">
                           <legend > registration From </legend >
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
                          <label for="email">Email:</label>
                          <div class="col-sm-12">
                            <h4></h4>
                            <input type="email" class="form-control"   name="email" placeholder="Enter email"  required>
                           
                                 <!--Check whether the field is empty-->
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                     <div class="form-group">
                        <label class="control-label col-sm-3">Password:</label>
                          <div class="col-sm-12">
                            <h4></h4>
		                        <!--Set the minimum length of password-->
                            <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="Enter password"  data-match="#password">
                                    <!--Check whether the field is empty-->
		                <div class="help-block with-errors"></div>
                        </div>
                     </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Confirm Password:</label>
                        <div class="col-sm-12">
                           <h4></h4>
                                <input type="password" data-error="Please reenter password" class="form-control" name="conf" id = "conf" placeholder="Confirm password"  data-match="#password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                data-match-error="Password does not match" required>
                    <!--Check whether the field is empty-->
		                      <div class="help-block with-errors"></div>
                        </div>
                   </div>
                 </div>
              <br/>
                    <div class="form-group" id = "bti">
                        <button type="reset" class="btn btn-danger" >delete</button>
                        <button type="submit" class="btn btn-success" id="submit"> register </button>
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
   </form>

    </body>
    <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script type = "text/javascript" src="test1.js"></script>
    <script type = "text/javascript" src="test2.js"></script>
  </body>
</html>