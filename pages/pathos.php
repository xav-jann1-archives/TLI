<?php
    require_once(CLASS_DIR.'/Database.class.php');
    
    $db = new DB();

    $query = "SELECT patho.desc, symptome.desc 
    FROM symptome
    JOIN symptPatho ON symptome.idS = symptPatho.idS
    JOIN patho ON patho.idP = symptPatho.idP
    ORDER BY patho.desc ASC";

    $result = $db->get($query);


    $tpl->assign('tableau', $result);
?>
  
