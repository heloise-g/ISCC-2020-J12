<?php

include_once('singleton.php');

$login= $_POST["user_login"];
$bdd = connect_to_database();
if ($bdd === False){
    echo "ça ne fonctionne pas";
    echo ("<a href= 'mini-site-routing.php'>retour></a>");
    return;
}
echo "<br/>"; 
$result = $bdd->prepare('SELECT login FROM utilisateurs WHERE login = ?');
$result-> execute(array('admin'));
$res = $result->fetch();

if($_POST['user_password']);

