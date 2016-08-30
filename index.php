<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 30/08/2016
 * Time: 16:19
 */
    if (isset($_POST['envoyer']))
    {
        if (isset($_POST['nom'],$_POST['prenom'],$_POST['message']))
        {
            extract($_POST);
            echo $nom." ".$prenom." ".$message;
        }
    }
require 'views/index.view.php';

