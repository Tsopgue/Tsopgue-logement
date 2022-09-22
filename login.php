<!DOCTYPE html>
   <html lang="fr">
         <head>
                   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
                    <title>Modifiez vos coordonnées</title>
                    <link rel="stylesheet" href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
                        <link rel="stylesheet" href="style.css">
        </head>
            <body>
               <?php 
                  include 'config.php';
                  global $con;
                  $con = getConnection(); 
                  session_start(); 
                  if(isset($_POST['email'],$_POST['password'])){
                     $email = $_POST['email'];
                     $password = $_POST['password'];
                     $sql = "SELECT * FROM `save`WHERE email = '$email' and password ='$password'";
                     $result = $con->query($sql);
                     $num = mysqli_num_rows($result);
                     if($num == 1){
                        $_SESSION['email']= $email;
                        header("location: index.php");
                       }

                  }
                  ?>
               <form  class =" col-lg-40 " action="" method="post" enctype="application/x-www-formurlencoded">
                  <div class = "container-fluid " id ="fg">
                        <div class="row">
                           <legend > Entre vos coordonnées </legend >
                             <div class="form-group">
                               <label  for="email" >Email:</label>
                                 <div class="col-sm-12">
                                    <input type="email" name="email" id="email" class="form-control" title="l'email  doit etre le meme email que celui de l'enregistrement" placeholder="Entrer l'email'" required>
                                    <span class="error" aria-live="polite"></span>
                                 </div>
                             </div>
                              <div class="form-group">
                                    <label  class="control-label col-sm-3" >Password:</label>
                                    <input type="password" name="password" class="form-control" id="Password" title="le mot de pass doit etre le meme mot de pass que celui de l'enregistrement" placeholder="Entrer le mot de pass" required>
                                    <span class="error" aria-live="polite"></span>
                              </div>
                               <br/>
                              <div class="form-group"id = "bti">
                                    <button type = "reset" class ="btn btn-danger" value ="effacer"> delete </button>
                                    <button type = "submit" class ="btn btn-success" id="submit"  > save connection </button>
                              </div>
                              <?php 
                                    if(!empty($message)){
                                    echo $message;
                                 }
                                 ?>
                              <div>
                                 <a href = "enregistrement.php"> enregistrement </a>
                              </div>
                      </div>
                   </div> 
             </form>
      </body>
      <script src = "bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
      <script type = "text/javascript" src="test1.js"></script>
      <script type = "text/javascript" src="test2.js"></script>
</html>