<?php

$check_error = 1;
$error = '';

if (isset($_POST['sent'])) {

    $name = $_POST['name'];
    $pwd = $_POST['pwd'];

    include_once CLASS_DIR . "/Database.class.php";

    if (strlen($name) > 0 && strlen($pwd) > 0) {

        if (!preg_match("/[^A-Za-z0-9\!\?\.\-_]/", $pwd) && ctype_alpha($name)) {

            $db = new DB();
            $query = "SELECT * FROM `users` WHERE name = '$name'";
            $user = $db->get($query)[0];

            if ($user['name'] == $name && $user['password'] == hash('sha256', $pwd)) {
                $_SESSION['name'] = $name;
            }
            else {
                $check_error = -3;
                $error = 'Erreur, identifiant ou mot de passe incorrect';
                }   
        }
        else {
            $check_error = -2;
            $error = 'Caractères non reconnu';
        }
    }
    else {
        $check_error = -1;
        $error = 'Champs vides';
    }
}

$form['error'] = $error;
$tpl->assign('form', $form);

?>