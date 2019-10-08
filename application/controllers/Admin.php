<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['title']	= 'Admin Login';
		
		if(!$this->session->userdata('admin_id') && $_POST)
		{
			 $username 			= $this->input->post('user_name', true);
			 $password 			= md5($this->input->post('password', true));
		
			$where = array(	'user_name' 		=>   	$username,
							'user_password'		=>		$password  );
							
			$login_data = $this->Admin_model->getSingle('edu_admin_table', $where);
				
			if(!empty($login_data))
			{
				$datetime = date('Y-m-d H:i:s');
				$session_data = array(
					'admin_id'   =>$login_data->admin_id	
				);
				
				$this->session->set_userdata($session_data);
				
				redirect(base_url().'admin/dashboard');				
			}
			else
			{
				$this->session->set_flashdata('error_message','<div class="error_message">Invalid email or password !</div>');
				redirect(base_url().'admin');
				
			}
		}
		else
		{
			if($this->session->userdata('admin_id'))
			{
				redirect(base_url().'admin/dashboard');	
			}else {
						$this->load->view('admin/login',$data);
			}
		}
	}
	

	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin');
	}
	
	public function dashboard()
	{
		$data['title']	= 'Admin Dashboard';
		$this->load->view('admin/dashboard',$data);
	}
	
	public function user_list()
	{
		$data['title']	= 'User List';
		
		$data['allusers']  = $this->Admin_model->getAll('edu_users');
		$this->load->view('admin/user-list', $data);
	}
	
	
	 
}
