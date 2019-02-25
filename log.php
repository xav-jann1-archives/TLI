<?php
        $dbName = 'acupuncture';
        $pass = 'password';
        $user = 'W-user';
        $db = new PDO('mysql:host=localhost;dbname='.$dbName, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


    $query = "INSERT INTO `users`(`prenom`, `nom`, `date`, `mail`, `password`) VALUES (".$_POST['lname'].",".$_POST['name'].",".date('Y-d-m').",".$_POST['Mail'].",".$_POST['pwd'].")";
    $db->exec($query);
?>