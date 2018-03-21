<?php

require_once dirname(__DIR__).'/lib/const.php';
require_once LIB.'Database.php';

class Model {

    protected $db;

    function __construct() {
        $this->db = new Database();
    }

    function beginTransaction() {
        return $this->db->beginTransaction();
    }

    function commit() {
        return $this->db->commit();
    }

    function rollBack() {
        return $this->db->rollBack();
    }

    function query($sql) {
        return $this->db->query($sql);
    }

    function prepare($sql) {
        return $this->db->prepare($sql);
    }

    function bindParam($param, $value, $data_type = PDO::PARAM_STR, $length = 16, $driver_options = null) {
        return $this->db->bindParam($param, $value, $data_type, $length, $driver_options);
    }

    function execute($params = null) {
        return $this->db->execute($params);
    }

    function fetch() {
        return $this->db->fetch();
    }

    function __destruct() {
        $this->db = null;
    }

}

?>