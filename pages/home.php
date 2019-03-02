<?php

$check_error = 1;
$error = '';

$name = $_POST['name'];
$pwd = $_POST['pwd'];

if (isset($_POST['sent'])) {

    include_once CLASS_DIR . "Database.class.php";

    if (strlen($name) > 0 && strlen($pwd) > 0) {
        $db = new DB();
        $query = "SELECT * FROM `users` WHERE name = '$name'";
        $user = $db->get($query)[0];

        if ($user == 0) {
            $check_error = -2;
            $error = 'mauvais identifiant';
        }
        else {
            if ($user['password'] != hash('sha256', $pwd)) {
                $check_error = -3;
                $error = 'mauvais mot de passe';
            }
            else {
                $_SESSION['name'] = $name;
            }
        }
    }
    else {
        $check_error = -1;
        $error = 'Champs vides';
    }
}

$form['error'] = $error;
$tpl->assign('form', $form);

// display template
display_all('head', 'header', 'footer');

?>