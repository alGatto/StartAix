<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 12/09/2016
 * Time: 22:29
 */

if(isset($errors) && count($errors) != 0){
    echo '<div class="alert alert-danger"> 
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo '<strong>Erreur! </strong>';
    foreach ($errors as $error){
        echo $error . '<br/>';
    }
    echo '</div>';
}
