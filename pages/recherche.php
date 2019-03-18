<?php
    require_once(CLASS_DIR.'/Database.class.php');
    
    $db = new DB();

    $symp = isset($_POST['symptome']) ? $_POST['symptome'] : '';
    $patho = isset($_POST['pathologie']) ? $_POST['pathologie'] : '';

    if($symp != ''){
        $patho ='';
        $query = "SELECT symptome.desc, patho.desc, patho.idP 
        FROM symptome
        JOIN symptPatho ON symptome.idS = symptPatho.idS
        JOIN patho ON patho.idP = symptPatho.idP
        WHERE symptome.desc like :symp
        ORDER BY symptome.desc ASC";

        $result = $db->get_2($query, [':symp' => "%{$symp}%"]);
        $tpl->assign('tableau', $result);
    }
    elseif($patho != ''){
        $query = "SELECT patho.desc, symptome.desc, patho.idP 
        FROM patho
        JOIN symptPatho ON patho.idP = symptPatho.idP
        JOIN symptome ON symptome.idS = symptPatho.idS
        WHERE patho.desc like :patho
        ORDER BY patho.desc ASC";
    
        $result = $db->get_2($query, [':patho' => "%{$patho}%"]);
        $tpl->assign('tableau', $result);
    }
    $tpl->assign('symp',$symp);
    $tpl->assign('patho',$patho);
?>