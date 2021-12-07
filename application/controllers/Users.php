<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
	
	public function create(){

        // $data['title'] = 'Create a new user';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header');
            $this->load->view('users/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->user_model->create_user();
            $this->load->view('templates/header');
            $this->load->view('users/success');
            $this->load->view('templates/footer');


        }
    }
	
}