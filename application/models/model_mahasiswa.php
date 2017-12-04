<?php
class Model_mahasiswa extends Ci_model{
	function tampilData(){
		$query=$this->db->get('mahasiswa');
	
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
}