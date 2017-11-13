<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelsCustome extends CI_Model {

	public function __construct(){
		parent::__construct();
		
	}
	
	public function data_view($tbl_name, $order){
		$sql = $this->db->query("select * from $tbl_name order by $order desc");
		return $sql->result_array();	
	}

	public function insert($table, $data){
		$sql = $this->db->insert($table, $data);
		return $data;	
	}
}
