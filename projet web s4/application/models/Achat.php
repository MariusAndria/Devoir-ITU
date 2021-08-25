<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Achat extends CI_Model{
	
	public function get_All_Achat(){
		$query = $this->db->query('SELECT * FROM achat');
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	}
	public function insert_Achat($idCaisse,$idProduit,$qte){
		$sql = "INSERT INTO achat VALUES (null,%s,%s,%s)";
	$sql = sprintf($sql,$this->db->escape($idProduit),$this->db->escape($qte),$this->db->escape($idCaisse));
		$this->db->query($sql);
	}
	public function getAchatParCaisse($idCaisse){
		$sql = "select nomProduit,prixUnitaire,quantite,prixUnitaire*quantite as montant from achat a join produit p on a.idProduit=p.idProduit where idCaisse = 2";
		/*$sql = sprintf($sql,$this->db->escape($idCaisse));*/
		echo "<br><br><br>".$sql;
		$query = $this->db->query($sql);
		$produit = array();
		foreach ($query->result_array() as $key) {
			$produit[] = $key;
		}
		return $produit;
	} 
}
?>