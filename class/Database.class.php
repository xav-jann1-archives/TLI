<?php
class DB{
    
    private $db;

    public function __construct() {
        include_once("config.php");
        $dbHost = DTB_HOST;
        $dbName = DTB_NAME;
        $user = DTB_LOGIN;
        $pass = DTB_PASS;
        
        try {
            $this->db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch (Exception $e) {
            die('Erreur : '. $e->getMessage());
        }
    }

    public function get($sql) {
        $resu = null;
        foreach($this->db->query($sql) as $row) {
            $resu[] = $row;
        }
        return $resu;
    }

    public function post($sql) {
        $this->db->exec($sql);
    }
}
?>