<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('assets');
		$this->load->model('caisse');
		$data['listeCaisse'] = $this->caisse->getListeCaisse();
		$this->load->view('index',$data);
		
	}		
}
