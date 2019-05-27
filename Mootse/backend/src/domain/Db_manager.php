<?php
namespace TSE\workshop_tse_bibli\domain;

require_once('../vendor/autoload.php');

use TSE\workshop_tse_bibli\domain\PdoConfig;
use \PDO as PDO;

class Db_manager {
    private $config;
    public $db;

    function __construct() {

        $this->config = PdoConfig::getData();
        $this->connect();
    }

    private function connect() {
        try {
            $this->db = new PDO("mysql:host=".$this->config['host'].';dbname='.$this->config['dbname'].";charset=utf8", $this->config['username'], $this->config['password']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return "Connecté à ".$this->config['host']." avec succès.";
        }
        catch (PDOException $e) {
            die("Error while connecting to database : ".$e->getMessage());
        }
    }
}
