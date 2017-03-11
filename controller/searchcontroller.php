  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Searchcontroller extends CI_Controller {
    
    /**
    *function to load view
    *@param void
    *@return void
    */ 
    public function index()
    {
        $this->load->view('searchview');
    }

    /**
    *function to search city
    *@param void
    *@return 
    */ 
    public function citySearch()
    {
        if ($this->input->post() && $this->input->is_ajax_request()) {

            $credentials=array(
                'city' => $this->input->post('city'),
            );
        $this->load->model('searchmodel');
        $data['result']=$this->searchmodel->searchData($credentials);
        echo json_encode($data);
        }
        else
        {
            $this->load->view('multiply');
        }
    }
}
?>