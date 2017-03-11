<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dbupdatecontroller extends CI_Controller {
	/**
	*function to load view
	*@param void
	*@return void
	*/ 
	public function index()
	{
		$this->load->view('dbupdateajax');
	}

	/**
	*function to insert values into db and return success message if registered
	*@param void
	*@return html values
	*/ 
	public function updateDatas()
	{
		if ($this->input->post() && $this->input->is_ajax_request()) {

			$credentials=array(
				'name' => $this->input->post('user'),
				'password' => $this->input->post('pwd')
			);
			$this->load->model('dbupdatemodel');
			if($this->dbupdatemodel->insertData($credentials)){
				$message = "<h1>thank you for registering</h1>";
				echo $message;
			}
			else
			{
				$this->load->view('dbupdateajax');
			}	
		}
		else
		{
			$this->load->view('dbupdateajax');
			
		}
	}
}
?>