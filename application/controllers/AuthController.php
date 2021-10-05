<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Auth');
    }

    public function login(){
        $this->load->view('auth/login');
    }

    public function do_login(){
        $req=$this->input;
        $login=$this->Auth->login(['email'=>$req->post('email')]);
        if($login->num_rows()>0){
            $rows=$login->row();
            if(password_verify($req->post('password'), $rows->password)){
                $this->session->set_userdata('id', $rows->id);
                redirect(base_url());
            }else{
                echo '<script>alert("Password anda salah"); window.location.href="'.base_url().'Login";</script>';
            }
        }else{
            echo '<script>alert("Email dan Password anda salah"); window.location.href="'.base_url().'Login";</script>';
        }
    }

    public function logout(){
        $this->session->unset_userdata('id');
        redirect('/Login');
    }

}