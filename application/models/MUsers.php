<?php
class MUsers extends CI_Model{

    function get($where = null){
        if($where == null){
            return $this->db->get('users');
        }else{
            return $this->db->get_where('users', $where);
        }
    }

    function add($data){
        $this->db->insert('users', $data);
    }

    function update($data, $id){
        $this->db->update('users', $data, $id);
    }

    function delete($id){
        $this->db->delete('users', $id);
    }
}