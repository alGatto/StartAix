<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 30/08/2016
 * Time: 19:46
 */

//définition des constantes de connexion à la bdd
define('DB_HOST', 'localhost');
define('DB_NAME', 'startaix');
define('DB_PASSWORD', 'root');
define('DB_USERNAME', 'root');

try{
    //utilisation du driver mysql
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
    //Pour pouvoir visualiser les erreurs dans les requetes sql
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("Erreur:".$e->getMessage()." Impossible de se connecter à la base de données.");
}
