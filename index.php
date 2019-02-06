<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=acupuncture;charset=utf8', 'W-user', 'password');
}
catch (Exception $e) { die('Erreur : ' . $e->getMessage()); }

$reponse = $bdd->query('SELECT * FROM symptome');
$donnees = $reponse->fetch();
$donnees = $reponse->fetch();
echo $donnees['desc']

?>

<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
</p>


<form action="cible.php" method="post">
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
</form>