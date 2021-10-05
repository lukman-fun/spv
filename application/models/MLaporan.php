<?php
class MLaporan extends CI_Model{

    function getBrgKtg(){
        return $this->db->get('barang');
    }

    // function getValidHistoryBarang($barang_id){
    //     return $this->db->query("SELECT * FROM history WHERE barang_id='" . $barang_id . "' ORDER BY id DESC LIMIT 1");
    // }

    // function getDP(){
    //     return $this->db->get('departement');
    // }

    function getHistoryNik($where){
        return $this->db->get_where('barang', $where);
    }

    function getNik($where = null){
        if($where == null){
            return $this->db->get_where('barang');
        }else{
            return $this->db->get_where('barang', $where);
        }
    }

    function add($data){
        $this->db->insert('barang', $data);
    }

    function up_pengembalian($data, $where){
        $this->db->update('barang', $data, $where);
    }

    function up_perbaikan($data, $where){
        $this->db->update('barang', $data, $where);
    }

}