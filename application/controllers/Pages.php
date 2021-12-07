<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	
	public function view($page = 'home')
	{
		// APPPATH est une constante codeigniter. Il contient la valeur du chemin d'accès complet à votre dossier d'application.
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}

		$this->load->helper('array');

		// titre de ma page
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');
	}

}