<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 30/08/2016
 * Time: 21:19
 */
//Si le formulaire est soumis
if (isset($_POST['register']))
{
    //Si tous les champs ont été remplis
    if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['how']) && !empty($_POST['email'])
        && !empty($_POST['password']) && !empty($_POST['password_confirm']))
    {
        $errors = [];//Tableau contenant l'ensemble des erreurs.
        extract($_POST);
        if (mb_strlen($password) < 8){
            $errors[] = "Veuillez choisir un mot de passe avec plus de 8 caractères.";
        }else{
            if ($password != $password_confirm){
                $errors[] = "Les deux mots de passe ne concordent pas.";
            }
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Veuillez rentrer une adresse email valide.";
        }

        if(is_already_in_use('email', $email, 'users')){
            $errors[] = "Adresse email déjà utilisée.";
        }

        if (count($errors)==0){
            //Envoi d'un mail d'activation
            //Enregistrement de l'utilisateur
            //Message de bienvenu
            //Redirection vers son profil
        }
    }
    else{
        $errors[] = "Veuillez remplir tous les champs.";
        echo $errors;
    }
}
?>

<?php require 'views/register.view.php'; ?>