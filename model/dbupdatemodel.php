<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dbupdatemodel extends CI_Controller {
	/**
	*function to insert datas into db
    *@return null
	**/ 
	public function insertData($datas)
	{
    $result=$this->db->insert('user',$datas);
    return $result;
	}
}
?>