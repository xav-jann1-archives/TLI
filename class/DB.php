<?php
class DB{
	private $dbHost = 'localhost';
	private $dbName = 'acupuncture';
	private $user = 'root';
	private $pass = 'toor';
	
    private function getDB() {
        $db = null;
        try {
            $db = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->user, $this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
        catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
            }
        return $db;
    }

    public function request($sql) {
        $resu = null;
        $db = $this->getDB();
        foreach($db->query($sql) as $row) {
            $resu[] = $row;
        }
        return $resu;
    }

    public function execRequest($sql) {
        $db = $this->getDB();
        $db->exec($sql);
    }
}
?>