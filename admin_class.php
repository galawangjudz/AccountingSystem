<?php
session_start();
Class Action {
	private $db;

	public function __construct() {
		ob_start();
	include("includes/config.php");
    
    $this->db = $mysqli;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}


	function delete_agent(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM t_agents where c_code = ".$id);
		if($delete){
			return 1;
		}
	}

	function delete_customer(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM store_customers where id = ".$id);
		if($delete){
			return 1;
		}
	}


}