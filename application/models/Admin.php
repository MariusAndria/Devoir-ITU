<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Admin extends CI_Model{
	
	public function traitementLogin($identifiant,$mdp){
		$query = $this->db->query('SELECT * FROM Gerant');
		$liste = array();
		foreach ($query->result_array() as $key) {
			$liste[] = $key;
		}
        for( $i=0;$i<count($liste);i++){
            if($liste['identifiant']==$identifiant && $liste['mdp']==$mdp)
            {
                return 1;
            }
        }
		return 0;
	}
    public function creerCaisse($nomCaisse)
    {
        $sql = "INSERT INTO caisse VALUES (null,%s)";
        $sql = sprintf($sql,$nomCaisse);
        $this->db->query($sql);
    }
?>