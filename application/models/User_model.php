<?php

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function create_user(){
        

        $data = array(
            'name' => $this->input->post('name'),
            'zipcode' => $this->input->post('zipcode'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
  
        return $this->db->insert('users', $data);
    }

}