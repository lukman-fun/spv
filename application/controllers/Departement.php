<?php
class Departement extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MDepartement', 'dp');
    }

    public function index(){
        if(isset($_GET['id'])){
            $v['dpId'] = $this->dp->get([ 'id' => $_GET['id'] ])->row();
        }
        $v['dp'] = $this->dp->get()->result();
        template('departement/index', 'Departement', $v);
    }

    public function add(){
        template('departement/add', 'Add Departement');
    }

    public function store(){
        $data = ['nama' => $this->input->post('nama')];
        if(empty($this->input->post('id'))){
            $this->dp->add($data);
        }else{
            $this->dp->edit($data, ['id' => $this->input->post('id')]);
        }
        redirect(base_url().'Departement');
    }

    public function delete($id){
        $this->dp->delete($id);
        redirect(base_url().'Departement');
    }
}