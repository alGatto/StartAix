<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 30/08/2016
 * Time: 21:19
 */
require 'config/database.php';
require 'includes/functions.php';
require 'includes/constants.php';

//Si le formulaire est soumis
if (isset($_POST['register']))
{
    //Si tous les champs ont été remplis
    if (not_empty(['name', 'firstname', 'how', 'email', 'password', 'password_confirm']))
    {
        $errors = [];//Tableau contenant l'ensemble des erreurs.
        extract($_POST);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
            $errors[] = "Veuillez rentrer une adresse email valide.";
            echo "Veuillez rentrer une adresse email valide.";
        }

        if(is_already_in_use('email', $email, 'users'))
        {
            $errors[] = "Adresse email déjà utilisée.";
            echo "Adresse email déjà utilisée.";
        }

        if (mb_strlen($password) < 8)
        {
            $errors[] = "Veuillez choisir un mot de passe avec plus de 8 caractères.";
            echo "Veuillez choisir un mot de passe avec plus de 8 caractères.";
        }
        else
        {
            if ($password != $password_confirm)
            {
                $errors[] = "Les deux mots de passe ne concordent pas.";
                echo "Les deux mots de passe ne concordent pas";
            }
        }

        if (count($errors)==0)
        {
            //Envoi d'un mail d'activation
            $to = $email;
            $subject = WEBSITE_NAME. "Activation de compte";
            $token = sha1($email.$password);

            ob_start();
            require 'templates/emails/activation.tmpl.php';
            $content= ob_get_clean();

            $headers = 'MIME-Version 1.0' . "/r/n";
            $headers = 'Content-type text/html; charset=iso-8859-1' . "/r/n";

            mail($to, $subject, $content, $headers);
            //Informer l'utilisateur pour qu'il vérifie sa boite mail
            echo "Mail d'activation envoyé ";

            //Enregistrement de l'utilisateur
            //Message de bienvenue
            //Redirection vers son profil
        }
    }
    else
    {
        $errors[] = "Veuillez remplir tous les champs.";
        echo $errors;
        echo "tous les champs ne sont pas rempli";
    }
}
?>

<?php require 'views/register.view.php'; ?>