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
            $this->db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName, $user, $pass);
        }
        catch (Exception $e) {
            die('Erreur : '. $e->getMessage());
        }
    }

    public function get($sql) {
        $resu = null;
        try {
            foreach($this->db->query($sql) as $row) {
                $resu[] = $row;
            }
            return $resu;
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function post($sql) {
        try {
            $this->db->exec($sql);
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
?>