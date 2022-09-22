<?php
    // Connexion à la base de données MySQL
    function getConnection()
    {
    $con = mysqli_connect('localhost', 'root', '', 'labo_db');

    if($con == false)
        {
            echo "erreur de connexion";
        }
    else
        {
            return $con;
        }
    }
?>