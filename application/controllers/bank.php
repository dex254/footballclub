
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('ball_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
			$data['banks'] = $this->ball_model->get_all_data('bank');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('bank/index',$data);
		$this->load->view('common/footer');
	}


	public function create()
		{
	    $data = array('id' => '');
	    $data['attributes'] = array('class' => 'form');
	    $data['prop'] = array('class' => 'form-control');

	    $ndata['login']=$this->session_data;

	    $this->load->view('common/header',$ndata);
	    $this->load->view('common/navigation');
	    $this->load->view('bank/create',$data);
	    $this->load->view('common/footer');
		}

	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Player Name', 'required');
				$this->form_validation->set_rules('number', 'Number', 'trim|required|numeric');
					$this->form_validation->set_rules('age', 'Age', 'trim|required|numeric');
			$this->form_validation->set_rules('phone', 'contact', 'trim|required|numeric');
				$this->form_validation->set_rules('date', 'Registerd', 'trim|required|date');
	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$databank = array(
						'name' => $this->input->post('name'),
						'number' => $this->input->post('number'),
						'age' => $this->input->post('age'),
						'phone' => $this->input->post('phone'),
						'date' => $this->input->post('date'),

          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->ball_model->insert_data('bank', $databank);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
