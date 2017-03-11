<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multiplycontroller extends CI_Controller {
	
	/**
	*function to load view
	*@param void
	*@return void
	*/ 
	public function index()
	{
		$this->load->view('multiply');
	}

	/**
	*function to multiply two numbers
	*@param void
	*@return json data(multiplication value)
	*/ 
	public function calculateMultiply()
	{
		if ($this->input->post() && $this->input->is_ajax_request()) {

			$credentials=array(
				'firstnumber' => $this->input->post('first'),
				'secondnumber' => $this->input->post('second')
			);

			$data['mul'] = $credentials['firstnumber']*$credentials['secondnumber'];
			echo json_encode($data);
		}
		else
		{
			$this->load->view('multiply');
		}
	}
}
?>