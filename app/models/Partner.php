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
    public function getPartner($id){
        $this->db->query('SELECT * FROM partners WHERE id=:id');
        $this->db->bind('id', $id);
        $result = $this->db->getOne();
        return $result;
    }
}