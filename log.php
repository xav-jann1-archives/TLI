<?php
    require_once('class/Database.class.php');

    $db = new DB();
    $lname = $_POST['lname'];
    $name = $_POST['name'];
    $mail = $_POST['Mail'];
    $pwd = $_POST['pwd'];
    
    $query = "INSERT INTO `users`(`name`, `lname`, `mail`, `password`) VALUES ('$name', '$lname', '$mail', '$pwd')";
    $db->post($query);
?>