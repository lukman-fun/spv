<?php
class Kategori extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MKategori', 'ktg');
    }

    public function index(){
        if(isset($_GET['id'])){
            $v['ktgId'] = $this->ktg->get([ 'id' => $_GET['id'] ])->row();
        }
        $v['ktg'] = $this->ktg->get()->result();
        template('kategori/index', 'Katgori', $v);
    }

    public function add(){
        template('kategori/add', 'Add Kategori');
    }

    public function store(){
        $data = ['nama' => $this->input->post('nama')];
        if(empty($this->input->post('id'))){
            $this->ktg->add($data);
        }else{
            $this->ktg->edit($data, ['id' => $this->input->post('id')]);
        }
        redirect(base_url().'Kategori');
    }

    public function delete($id){
        $this->ktg->delete($id);
        redirect(base_url().'Kategori');
    }
}