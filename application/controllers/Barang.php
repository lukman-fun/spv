<?php
class Barang extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MBarang', 'brg');
    }
    
    public function index(){
        $v['brg'] = $this->brg->get()->result();
        template('barang/index', 'Barang', $v);
    }

    public function detail($id){
        $v['brg'] = $this->brg->get(['id' => $id])->row();
        template('barang/detail', 'Detail Barang', $v);
    }

    public function edit($id){
        $v['brg'] = $this->brg->get(['id' => $id])->row();
        template('barang/edit', 'Update Barang', $v);
    }

    public function up_peminjaman($id){
        $data = array_merge($this->input->post(), ['tgl_kembali'=>'0000-00-00', 'status'=>'pinjam', 'kerusakan'=>'']);
        $this->brg->up_peminjaman($data, $id);
        redirect(base_url().'Barang');
    }

    public function delete($id){
        $this->brg->delete(['id' => $id]);
        redirect(base_url().'Barang');
    }
}