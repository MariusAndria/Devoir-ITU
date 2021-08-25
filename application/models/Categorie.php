<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Categorie extends CI_Model{
public function getListeCategorie() {

		$sql = 'SELECT * FROM categorie';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>