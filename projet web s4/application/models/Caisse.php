<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Caisse extends CI_Model{
public function getListeCaisse(){

		$sql = 'SELECT * FROM caisse';
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
}
?>