<?php
class Profile extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('MUsers', 'users');
    }

    public function index(){
        $v['users'] = $this->users->get(['id' => $this->session->id])->row();
        template('profile/index', 'Update Profile', $v);
    }
}