<?php
    session_start(['cookie_lifetime' => 3,]);

    if(isset($_SESSION['nom'])) {
        echo"Session ouverte:";
    } 
    else {
        $_SESSION['nom'] = $GET['nom'];
        echo "overture";
    }
?>