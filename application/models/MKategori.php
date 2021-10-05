<?php
class MKategori extends CI_Model{

    function get($where = null){
        if($where == null){
            return $this->db->get('kategori');
        }else{
            return $this->db->get_where('kategori', $where);
        }
    }

    function add($data){
        $this->db->insert('kategori', $data);
    }

    function edit($data, $where){
        $this->db->update('kategori', $data, $where);
    }

    function delete($id){
        $this->db->delete('kategori', ['id' => $id]);
    }

}