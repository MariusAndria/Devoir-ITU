<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EntrerAchat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Load
	 *	- or -
	 * 		http://example.com/index.php/Load/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Load/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	}

	/*public function index(){
		$this->load->helper('assets');
		$data['caisse'] = $this->session->userdata('caisse');
		$data['template'] = 'accueil.php';
		$this->load->view('template_accueil',$data);
		
	}*/
	public function achatProduit(){
		$this->load->library('session');
        $caisse = $this->session->userdata('sessionCaisse');
		$idProduit = $this->input->post('produit');
		$quantite = $this->input->post('quantite');
        $this->load->model('achat');
        $this->achat->insert_Achat($caisse,$idProduit,$quantite);
	}
    public function getListeProduit()
    {
        $categorieChoisi = $this->input->post('categorieChoisi');
        $this->load->model('produit');
		$data['listeProduit'] = $this->produit->getListeProduit($categorieChoisi);
		$this->load->view('listeProduit',$data);

    }
}