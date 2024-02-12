<?php 

class User extends  CI_Model{

    public function getDataUser(){
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
    }

}