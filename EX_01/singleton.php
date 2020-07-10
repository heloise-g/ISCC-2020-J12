<?php

function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "base-site-rooting";
    try{
        $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
        echo "Yess connecté";
        return $pdo;
    }catch(PDOException $e) {
        echo "ERREUR $e";
        return False;
    }
}
?>
<?php
