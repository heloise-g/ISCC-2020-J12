<!DOCTYPE html>
<html>
    <head>
        <title>Mini site routing</title>
        <a href="http://localhost/ISCC/ISCC-2020-J08/EX_01/mini-site-routing.php"><?php$_GET?></a>
        <nav>
            <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1">Accueil</a>
            <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=2">Page 1</a>
            <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=3">Page 2</a>
            <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion">Connexion</a>
        </nav>
    </head>
    <body>
        <?php
        if(isset($_GET["page"])){
            if ($_GET["page"]== 1){
                echo "<h1>";
                echo "Accueil!";
                echo "</h1>";
            }
            elseif ($_GET["page"]== 2){
                echo "<h1>";
                echo "Page 1!";
                echo "</h1>";
            }
            elseif ($_GET["page"]== 3){
                echo "<h1>";
                echo "Page 2!";
                echo "</h1>";
            }
            elseif ($_GET["page"]== "connexion"){
                echo "<h1>";
                echo "Connexion";
                echo "</h1>";
                include("connexion.php");
            }
        }
        ?>
        <?php
            if(isset($_SESSION["id"])){
                echo "loging : ";
                echo $_SESSION["id"];
            }
            else{
                if(isset($_COOKIE["id"])){
                    $_SESSION["id"]=$_COOKIE["id"];
                }
                else{
                    var_dump($_SESSION, $_COOKIE);
                    header("location: http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion");
                }
            }
        ?>
    </body>
</html>
