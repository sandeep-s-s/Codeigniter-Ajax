           <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Searchmodel extends CI_Controller {
	/**
	*function to check city in db
    *@return null
	**/ 
	public function searchData($datas)
	{
	$this->db->select('*');
	$this->db->from('myTable');
	$this->db->like('city', $datas['city'], 'after');
	$query = $this->db->get();
	return ($query->result());
	}
}
?>