<?php
    if(isset($_POST["user_password"])){
        if($_POST["user_password"]== "2020"){
            $_SESSION["id"]= $_POST["user_login"];
            var_dump($_SESSION, $_COOKIE);
            setcookie("id",$_SESSION["id"]);
            header("location: http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1");
        exit();
        }
        else{
        echo "Mauvais couple identifiant/mot de passe." . "<br/>";
        echo "<a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion'> Connexion </a>";
        }
    } 
?>  