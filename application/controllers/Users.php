<?php

class Users extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MUsers', 'users');
    }

    public function index(){
        $v['users'] = $this->users->get(['role' => 'users'])->result();
        template('users/index', 'Manage Users', $v);
    }

    public function add(){
        template('users/add', 'Add Users');
    }

    public function store(){
        $data = array_merge($this->input->post(), ['password' => password_hash($this->input->password, PASSWORD_DEFAULT), 'role' => 'users']);
        $this->users->add($data);
        redirect(base_url()  . 'Users');
    }


    public function edit($id){
        $v['users'] = $this->users->get(['id' => $id])->row();
        template('users/edit', 'Update Users', $v);
    }

    public function update($id){
        $data = $this->input->post();
        if($data['password'] != ''){
            $data = array_merge($this->input->post(), [ 'password' => password_hash($this->input->password, PASSWORD_DEFAULT) ]); 
        }else{
            unset($data['password']);
        }

        $this->users->update($data, ['id' => $id]);
        redirect(base_url()  . 'Users');
    }

    public function delete($id){
        $this->users->delete(['id' => $id]);
        redirect(base_url()  . 'Users');
    }
}