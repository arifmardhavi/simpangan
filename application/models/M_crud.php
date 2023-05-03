<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

    // CREATE
    public function create($table,$data)
    {
        $this->db->insert($table,$data);
        return $this->db->insert_id();   
    }

    // READ
    public function read($table,$data){
        return $this->db->get_where($table,$data)->row();
    }

    // UPDATE
    public function update($table,$data,$where){
        return $this->db->update($table,$data,$where);
    }

    // DELETE
    public function delete($table,$where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }
}