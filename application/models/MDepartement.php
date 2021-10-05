<?php
class MDepartement extends CI_Model{

    function get($where = null){
        if($where == null){
            return $this->db->get('departement');
        }else{
            return $this->db->get_where('departement', $where);
        }
    }

    function add($data){
        $this->db->insert('departement', $data);
    }

    function edit($data, $where){
        $this->db->update('departement', $data, $where);
    }

    function delete($id){
        $this->db->delete('departement', ['id' => $id]);
    }

}