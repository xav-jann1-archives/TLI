<?php

try {
  $db = new PDO('mysql:host=localhost;dbname=acupuncture;charset=utf8', 'W-user', 'password');
}
catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }

?>

<p>Bonjour !</p>


<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>


<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>

