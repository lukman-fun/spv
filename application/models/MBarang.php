<?php
class MBarang extends CI_Model{

    function get($where = null){
        if($where == null){
            return $this->db->get('barang');
        }else{
            return $this->db->get_where('barang', $where);
        }
    }

    function up_peminjaman($data, $id){
        $this->db->update('barang', $data, ['id' => $id]);
    }
    // function gethistoryBRG($barang_id){
    //     return $this->db->query("SELECT history.*, departement.nama as namaDP FROM history LEFT JOIN departement ON history.departement_id=departement.id WHERE barang_id='" . $barang_id . "' ORDER BY id DESC LIMIT 1");
    // }

    function delete($id){
        $this->db->delete('barang', $id);
    }
}