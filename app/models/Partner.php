<?php

class Partner {
    private $db;

    public function __construct()
    {
        $this_db = new Database();
    }

    public function getPartners(){
            $this->db->query('SELECT * FROM partners');
            $result = $this->db->getAll();
            return $result;
    }

}