<?php
class Connect{
    protected $dbh;

    protected function Connection(){
        try {
            $connect = $this->dbh = new PDO("mysql:local=localhost;dbname=crud_mvc_php", "root", "");
            return $connect;
        } catch (Exception $e) {
            print "¡Error en BD!: " .$e->getMessage(). "<br/>";
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}
?>