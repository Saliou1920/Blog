<?php

class Post_model extends CI_Model {
	
	public function __construct(){
		
        // exécuter le constructeur parent
        parent::__construct(); // construct the Model class

        // charger la librairie database, $this->db
        // on n'a pas besoin si on load la librairie database dans notre autoload.php
		$this->load->database();	

	}

    /*
    ** avoir tous les articles
    */
	public function get_posts($slug = FALSE) {

		if($slug === FALSE){
            //retourne tous les articles
			$query = $this->db->get('posts');
			return $query->result_array();
		}
		//retourne l'article sélectionné
		$query = $this->db->get_where('posts', array('slug' => $slug));

		return $query->row_array();
	}

    /*
    ** insérer un nouveau article
    */
    public function create_post(){
        
        // format convivial pour les URL (url friendly format)
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'post_image' => $this->input->post('post_image'),
        );

        return $this->db->insert('posts', $data);
    }

    /*
    ** supprimer un article
    */
    public function delete_post($id){

        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }

    /*
    ** mettre à jour un article
    */
    public function update_post(){
        
        // format convivial pour les URL (url friendly format)
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body')
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
    }

}