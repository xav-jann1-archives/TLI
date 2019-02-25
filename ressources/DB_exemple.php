<?php

require_once('DB.php');

$db = new DB();

$query = "SELECT * FROM symptome";

$result = $db->requete($query);

foreach($result as $i) {
    echo "<li>".$i[1]."</li>";
}

?>