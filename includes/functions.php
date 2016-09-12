<?php
/**
 * Created by PhpStorm.
 * User: algattuso
 * Date: 31/08/2016
 * Time: 14:42
 */

/* Pour remplacer: if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['how']) && !empty($_POST['email'])
    && !empty($_POST['password']) && !empty($_POST['password_confirm']))
{*/
if (!function_exists('not_empty'))
{
    function not_empty($fields = [])
    {
        if (count($fields) != 0)
        {
            foreach ($fields as $field)
            {
                if (empty($_POST[$field]) || trim($_POST[$field]) == "")
                {
                    return false;
                }
            }
            return true;
        }
    }
}

if (!function_exists('is_already_in_use'))
{
    function is_already_in_use($field, $value, $table)
    {
        global $db;//A ne pas faire.
        $q = $db->prepare("SELECT id FROM $table WHERE $field = ? "); //pour eviter les injections SQL mettre ? à la place de $value
        $q->execute([$value]);

        $count = $q->rowCount();
        $q->closeCursor();

        return $count;
    }
}
