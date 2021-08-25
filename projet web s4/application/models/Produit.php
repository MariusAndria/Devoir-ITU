<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Produit extends CI_Model{
public function getListeProduit($cat){

		$sql = 'SELECT * FROM produit where idCategorie = %s';
		$sql = sprintf($sql,$cat); 
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>