<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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

	  $data = array('id' => '');
	  $data['attributes'] = array('class' => 'contact-form');
	  $data['prop'] = array('class' => 'form-control');

		$data['users'] = $this->ball_model->get_all_user_data();
		$ndata['login']=$this->session_data;

    $this->load->view('common/header',$ndata);
    $this->load->view('common/header');
    $this->load->view('common/navigation');
    $this->load->view('users/index',$data);
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
    $this->load->view('users/create',$data);
    $this->load->view('common/footer');
	}

  public function store()
	{
    $this->load->library('form_validation');
		$this->load->helper(array('form'));
		$this->load->helper('security');

		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('phone', 'phone', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
    if ($this->form_validation->run() === FALSE)
		{
			$this->create();
		}
    else
		{
  	  	$datauser = array(
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'status' => 1,
          'password' => do_hash($this->input->post('password')),
					);
        $userRegId=$this->ball_model->insert_data('users', $datauser);
				redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
	}
public function destroy()
		{
			$userId = $this->uri->segment(3, 0);
			$data['status']=2;
			$this->ball_model->update_data('users', $userId, $data);
			redirect($_SERVER['HTTP_REFERER'],'refresh');
		}
}
