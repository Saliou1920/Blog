<?php

class User_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    
    public function get_users($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }

        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
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

    public function update_user($id){
        $data = array(
            'name' => $this->input->post('name'),
            'zipcode' => $this->input->post('zipcode'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
  
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

}