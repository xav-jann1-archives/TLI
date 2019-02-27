<?php
        require_once('resources/DB.php');
    
        $db = new DB();


    $query = "INSERT INTO `users`(`prenom`, `nom`, `date`, `mail`, `password`) VALUES (".$_POST['lname'].",".$_POST['name'].",".date('Y-d-m').",".$_POST['Mail'].",".$_POST['pwd'].")";
    $db->execRequest($query);
?>