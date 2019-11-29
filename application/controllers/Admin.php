<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 08-04-2019
 * Time: 06:07 PM
 */
class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('user_id'))
		{
			redirect('admin/dashboard');
		}

	}

	public function index()
	{
		$this->load->view('admin/pages/login');
	}

	public function login()
	{
		$this->load->view('admin/pages/login');

        $this->form_validation->set_rules('username','Username','required|valid_email|trim|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[6]|max_length[12]');

        if ($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('AdminModel');
			$login_id = $this->AdminModel->adminAuth($username , $password);
			if ($login_id)
			{
				 //email id password match
				$this->session->set_userdata('user_id',$login_id);
				$this->session->set_userdata('email',$username);
				$this->session->keep_flashdata('feedback','Login Success');
				$this->session->keep_flashdata('feedback_class','alert-success');
				$this->session->keep_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
				return redirect(base_url('admin/dashboard'),'refresh');
			}
			else
			{
				//not match email and password
				$this->session->set_flashdata('feedback','Invalid Email/Password');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				return redirect('admin');
			}
		}
		else
		{
			//login failed
			$this->session->set_flashdata('feedback','Invalid Email/Password');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			return redirect('admin');
		}

	}

	public function change_password()
	{

	}

}
