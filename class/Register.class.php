<?php


$form_mail = isset($_GET['mail']) ? $_GET['mail'] : '';
$form_login = isset($_POST['name']) ? $_POST['name'] : '';
$form_login = isset($_POST['lname']) ? $_POST['lname'] : '';
$form_pass = isset($_POST['pwd']) ? $_POST['pwd'] : '';
$form_passc = isset($_POST['pwdc']) ? $_POST['pwdc'] : '';

if (isset($_POST["sent"]) && $_POST["sent"] == 'sent') {

	include_once("./class/Database.class.php");

	$database = new Database();

	$check_login = 1;
	$check_pass = 1;
	$check_mail = 1;
	$check_school = 1;
	$check_captcha = 1;

//  ----- [ Check login ] --------------------------------------------------

	if (strlen($form_login) != 0)
	{
			if (!(preg_match("/[^A-Za-z0-9\!\?\.\-_]/", $form_login)))
			{
				$temp = $database->req_post('SELECT COUNT(*) as exist FROM T_SGL_USER WHERE LOWER(SU_LOGIN)=LOWER(:login)', array('login' => $form_login));
				$data = $temp->fetch();

				if ($data["exist"] != 0)
				{
					$check_login = -4;
					$error_login = "Nom déja utilisé.";
				}
			}
			else
			{
				$check_login = -3;
                $error_login = "Les caractères choisie ne sont pas valides<br />
                Vous avez droit aux chiffres, aux lettres (sans accent) et à: . ? ! # _ -";
			}
	}
	else
	{
		$check_login = -1;
		$error_login = "Les champs ne peuvent pas rester vide.";
	}

	if ($check_login < 0)
	{
		$error_login = "<div class=\"error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>".$error_login."</div>";
	}

//  ----- [ Check pass ] --------------------------------------------------

	if (strlen($form_pass) != 0)
	{
		if (strlen($form_pass) >= 8)
		{
			if (!(preg_match('/[A-Za-z]/', $form_pass) && preg_match('/[0-9]/', $form_pass)))
			{
				$check_pass = -3;
				$error_pass = "On a dit au moins une lettre et un chiffre ! Si vous m'écoutez pas aussi :( ...";
			}
		}
		else
		{
			$check_pass = -2;
			$error_pass = "On a dit au moins 8 caractères ! C'est pour que la NSA puisse pas le décrypter è_é !";
		}
	}
	else
	{
		$check_pass = -1;
		$error_pass = "Non vraiment, c'est plus sécuritaire si vous en mettez un :/";
	}

	if ($check_pass < 0)
	{
		$error_pass = "<div class=\"error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>".$error_pass."</div>";
	}

//  ----- [ Check mail ] --------------------------------------------------

	if (strlen($form_mail) != 0)
	{
		if (filter_var($form_mail, FILTER_VALIDATE_EMAIL) == true)
		{
			$temp = $database->req_post('SELECT COUNT(*) as exist FROM T_SGL_USER WHERE SU_MAIL=:mail AND SU_PASS IS NOT NULL', array('mail' => $form_mail));
			$data = $temp->fetch();

			if ($data["exist"] != 0)
			{
				$check_mail = -3;
				$error_mail = "Vous êtes pas déjà inscrit avec ce mail ?<br />Non parce que si vous avez juste oublié votre mot de passe, on peut le récupérer hein ?";
			}
		}
		else
		{
			$check_mail = -2;
			$error_mail = "Comment on va vous envoyer des petits mots doux si votre mail ne marche pas :'( ?";
		}
	}
	else
	{
		$check_mail = -1;
		$error_mail = "Comment on va vous envoyer des petits mots d'amour si on a pas votre mail :'( ?";
	}

	if ($check_mail < 0)
	{
		$error_mail = "<div class=\"error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>".$error_mail."</div>";
	}

//  ----- [ Check school ] --------------------------------------------------

	if (strlen($form_school) == 0)
	{
		$check_school = -1;
		$error_school = "Et si ! On est fier de son école et on l'affiche !";
	}

	if ($check_school < 0)
	{
		$error_school = "<div class=\"error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>".$error_school."</div>";
	}

//  ----- [ Check captcha ] --------------------------------------------------

	if (!validCaptcha($form_captcha))
	{
		$check_captcha = -1;
		$error_captcha = "Roh, il suffit juste de cliquer sur la petite case...";
	}

	if ($check_captcha < 0)
	{
		$error_captcha = "<div class=\"error\" style=\"text-align:center;\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>".$error_captcha."</div>";
	}

//  ----- [ Final check ] --------------------------------------------------

	if (($check_login > 0) && ($check_pass > 0) && ($check_mail > 0) && ($check_school > 0) && ($check_captcha > 0))
	{
		$register_flag = true;
	}
}

if ($register_flag)
{
	$salt = random_str(100);
	$activation = random_str(20);

	include_once("./class/Form.class.php");

	$fields = array(
		'login' => array('type' => 'string', 'length' => '128'),
		'pass' => array('type' => 'string', 'length' => '128'),
		'mail' => array('type' => 'string', 'length' => '128'),
		'school' => array('type' => 'string', 'length' => '128'),
		'configsalt' => array('type' => 'value', 'value' => CONFIG_SALT),
		'salt' => array('type' => 'value', 'value' => $salt),
		'activation' => array('type' => 'value', 'value' => $activation)
	);

	$query = "CALL INSERT_SGL_USER(:login, :pass, :salt, :configsalt, :mail, :activation, :school)";

	$database = new Database();
	$form = new Form($database, $query, $fields);
	if($form->is_valid())
	{
		$return = $form->send();
	
		$data = $return->fetch();

		debug("Data", $data);

		if ($data["RESULT"])
		{
			$subject = "Confirmation d'inscription à la Student Gaming League";
			$content = "Bienvenue à la Student Gaming League !\n\n
Pour confirmer votre inscription, cliquez sur le lien suivant : <https://".SERVER_ADDR.SERVER_REP."/index.php?page=activation&mvp=".strtolower($form_login)."&key=".$activation.">\n
Vous pourrez ensuite créer ou rejoindre une équipe pour vos jeux préférés.\n\nL'équipe de la Student Gaming League 2018";

			include_once("./class/Mail.class.php");
			new Mail($form_mail, $subject, $content);
		}
    }
}
?>