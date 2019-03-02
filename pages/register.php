<?php

$register_flag = false;

$error_name = '';
$error_lname = '';
$error_pass = '';
$error_mail = '';

if (isset($_POST["sent"])) { //TODO test de sent
    
	include_once("./class/Database.class.php");

	$db = new DB();

    $check_name = 1;
    $check_lname = 1;
	$check_pass = 1;
	$check_mail = 1;

    $form_name = isset($_POST['name']) ? $_POST['name'] : '';
    $form_lname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $form_pass = isset($_POST['pwd']) ? $_POST['pwd'] : '';
    $form_passc = isset($_POST['pwdc']) ? $_POST['pwdc'] : '';
	$form_mail = isset($_POST['mail']) ? $_POST['mail'] : '';

//  ----- [ Check name ] --------------------------------------------------

	if (strlen($form_name) != 0) {
        if (!(preg_match("/[^A-Za-z]/", $form_name))) {
            $temp = $db->get("SELECT COUNT(*) as exist FROM users WHERE name='$form_name'");
            
            if ($temp[0][0] != 0) {
                $check_name = -4;
                $error_name = "Nom déja utilisé";
            }
        }
        else {
            $check_name = -3;
            $error_name = "Caractère non reconnu.<br />Veuillez réessayer";
        }
	}
	else {
		$check_name = -1;
		$error_name = "Veuillez renseigner votre nom";
	}

    //  ----- [ Check lname ] --------------------------------------------------

	if (strlen($form_lname) != 0) {
        if (!(preg_match("/[^A-Za-z]/", $form_lname))) {
            $temp = $db->get("SELECT COUNT(*) as exist FROM users WHERE lname='$form_lname'");

            if ($temp[0][0] != 0) {
                $check_lname = -4;
                $error_lname = "Prénom déja utilisé";
            }
        }
        else {
            $check_lname = -3;
            $error_lname = "Caractère non reconnu.<br />Veuillez réessayer";
        }
	}
	else {
		$check_lname = -1;
		$error_lname = "Veuillez renseigner votre prénom";
	}
    
//  ----- [ Check pass ] --------------------------------------------------

	if (strlen($form_pass) != 0) {
		if (strlen($form_pass) >= 8) {
			if (!(preg_match('/[A-Za-z]/', $form_pass) && preg_match('/[0-9]/', $form_pass))) {
				$check_pass = -3;
				$error_pass = "Veulliez mettre au moins une lettre (majuscule ou minuscule) et un chiffre.";
			}
		}
		else {
			$check_pass = -2;
			$error_pass = "Le mot de passe doit fire au moins 8 caractères";
		}
	}
	else {
		$check_pass = -1;
		$error_pass = "Aucun mot de passe n'a été renseigné";
    }
    
    if ($form_pass != $form_passc) {
        $check_pass = -4;
		$error_pass = "Mots de passe non identiques veuillez recommencer";
    }

//  ----- [ Check mail ] --------------------------------------------------

	if (strlen($form_mail) != 0) {
		if (filter_var($form_mail, FILTER_VALIDATE_EMAIL) == true) {
			$temp = $db->get("SELECT COUNT(*) as exist FROM users WHERE mail='$form_mail'");

			if ($temp[0][0] != 0) {
				$check_mail = -3;
                $error_mail = "Vous êtes pas déjà inscrit avec ce mail ?<br />
                si vous avez oubliez votre mot de passe utilisé le lien 'mot de passe oublié'";
			}
		}
		else {
			$check_mail = -2;
			$error_mail = "mail non valide";
		}
	}
	else {
		$check_mail = -1;
		$error_mail = "mail non renseigné";
	}

//  ----- [ Final check ] --------------------------------------------------

	if (($check_name > 0) && ($check_pass > 0) && ($check_mail > 0) && ($check_lname > 0)) {
		$register_flag = true;
	}
}

if ($register_flag) {
    $db = new DB();
    echo "envoi</br>";
    $query = "INSERT INTO `users`(`name`, `lname`, `mail`, `password`) VALUES ('$form_name', '$form_lname', '$form_mail', '$form_pwd')";
    $db->post($query);
}
else {
    echo "pas de flag</br>";
}
echo "[$check_name ,  $check_pass ,  $check_lname  , $check_mail]";

$form['error_name'] = $error_name;
$form['error_lname'] = $error_lname;
$form['error_mail'] = $error_mail;
$form['error_pass'] = $error_pass;
$tpl->assign('form', $form);

// display template
display_all('head', 'header', 'footer');

?>