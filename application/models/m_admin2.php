<?php 
 
class M_admin2 extends CI_Model{	
	function tampildatatraining(){
		return $this->db->get('datatraining2');
	}
	function inputdatatraining($data,$table){
	$this->db->insert($table,$data);
	}
}	