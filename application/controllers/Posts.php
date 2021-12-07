<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	/*
	public function __construct(){	
        // exécuter le constructeur parent
        parent::__construct(); // construct the CI_Controller class
	}
	*/
	
	/*
	** voir tous les articles
	*/
	public function index()
	{
		$data['title'] = 'Latests posts';

		// aller chercher tous les posts à l'aide de notre model càd de la table posts dans notre BD
		$data['posts'] = $this->post_model->get_posts();
		
		// test 
		// var_dump($data['posts']);
		// ou bien
		// print_r($data['posts']);
		// exit;

		$this->load->view('templates/header');
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer');
	}

	/*
	** voir tout l'article sélectionné
	*/
	public function view($slug=NULL) {
		
		// aller chercher les informations du post séléctionné à partir de notre model càd de la la table posts dans notre BD
		$data['post'] = $this->post_model->get_posts($slug);		
		
		if(empty($data['post'])){
			show_404();
		}
		
		// mettre le titre de la page = au titre du post
		// var_dump($data['post']);
		$data['title'] = $data['post']['title'];
		
		//charger les vues
		$this->load->view('templates/header');
		$this->load->view('posts/view', $data); // creation de la vue : view dans posts
		$this->load->view('templates/footer');
		
	}

	/*
	** insertion d'un nouveau article
	*/
	public function create(){
		//fixer le titre de la page
		$data['title'] = 'Create Post';
		
		//fixer les régles de validation du formulaire
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		
		//si problème dans la validation du formulaire
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('posts/create', $data);
			$this->load->view('templates/footer');
		} 
		else {
			// validation ok donc fait l'insertion
			$this->post_model->create_post();
			// redirection
			redirect('posts');
		}
	}

	/*
	** éditer un article
	*/
	public function edit($slug){

		$data['post'] = $this->post_model->get_posts($slug);

		if(empty($data['post'])){
			show_404();
		}

		//fixer le titre de la page
		$data['title'] = 'Edit Post';
		
		//charger les vues
		$this->load->view('templates/header');
		$this->load->view('posts/edit', $data);
		$this->load->view('templates/footer');
	}

	/*
	** mettre à jour un article
	*/
	public function update(){

		//fixer les régles de validation du formulaire
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');
		
		//si problème dans la validation du formulaire
		if($this->form_validation->run() === FALSE){
			//fixer le titre de la page
			$data['title'] = 'Edit Post';

			//récupérer les informations du formulaire
			$data['id'] = $this->input->post('id');
			$data['title'] = $this->input->post('title');
			$data['body'] = $this->input->post('body');

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		} 
		else {
			// la validation est ok donc on fait la mis à jour
			$this->post_model->update_post();
			// redirection
			redirect('posts');
		}

	}

	/*
	** supprimer un article
	*/
	public function delete($id){
		// supprimer l'article (post)
		$this->post_model->delete_post($id);
		// redirection
		redirect('posts');
	}

}