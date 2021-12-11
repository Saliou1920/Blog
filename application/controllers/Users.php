<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
	public function index()
    {
        $data['title'] = 'Users';
        $data['users'] = $this->user_model->get_users();
        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['user'] = $this->user_model->get_users($id);
        if (empty($data['user']))
        {
            show_404();
        }
        $data['title'] = $data['user']['name'];
        $this->load->view('templates/header');
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }

	public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', 
                                        array('is_unique' => 'This %s already exists.',
                                            'required' => 'You must provide a %s.')
                                        );  
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]', 
                                        array('is_unique' => 'This %s already exists.',
                                              'required' => 'You must provide a %s.')
                                    );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

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
	
    public function edit($id = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a user';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() === FALSE)
        {
            $data['user'] = $this->user_model->get_users($id);
            if (empty($data['user']))
            {
                show_404();
            }
            $this->load->view('templates/header');
            $this->load->view('users/edit', $data);
            $this->load->view('templates/footer');

        }
        else
        {
            $this->user_model->update_user($id);
            $this->load->view('templates/header');
            $this->load->view('users/success');
            $this->load->view('templates/footer');

        }
    }

    public function delete($id)
    {
        $this->user_model->delete_user($id);
        redirect('users');
    }
}