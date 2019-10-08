<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
	
	
	public function testimonials()
	{
		$data['title']	= 'Testimonials';
		$this->load->view('pages/testimonials',$data);
	}
	public function pricing_table()
	{
		$data['title']	= 'Pricing Table';
		$this->load->view('pages/pricing-table',$data);
	}
	
	public function signup()
	{
		$data['title']	= 'SignUp';
		$this->form_validation->set_rules('username', 'User name', 'required|is_unique[edu_users.user_name]', array('is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('first_name', 'Your first Name', 'required');
		$this->form_validation->set_rules('your_email', 'Email', 'required|is_unique[edu_users.user_email]', array('is_unique' => 'This %s already exists.'));
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE){

			$this->load->view('pages/signup',$data);
		}
		else{
			
			$userData = array( 
				'first_name' 			=> strip_tags($this->input->post('first_name')), 
				'last_name' 			=> strip_tags($this->input->post('last_name')), 
				'user_name'				=> strip_tags($this->input->post('username')), 
				'user_email' 			=> strip_tags($this->input->post('your_email')), 
				'user_password' 		=> md5($this->input->post('password'))
			); 						
			$insert = $this->Common_model->save('edu_users', $userData); 
			if($insert){ 
                $this->session->set_flashdata('success_msg', '<div class="success_msg">Your account registration has been successful. Please login to your account.</div>'); 
                $this->load->view('pages/signup',$data); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                }
			
		}
	}
	
	public function signin()
	{
		$data['title']	= 'Signin';
		if(!$this->session->userdata('id') && $_POST)
		{
			 $your_email 		= $this->input->post('your_email', true);
			 $password 			= md5($this->input->post('password', true));
		
			$where = array(	'user_email' 		=>   	$your_email,
							'user_password'		=>		$password  );
							
			$login_data = $this->Common_model->getSingle('edu_users', $where);
			
			if(!empty($login_data))
			{
				$datetime = date('Y-m-d H:i:s');
				$session_data = array(
					'user_id'   =>$login_data->user_id	
				);
				
				$this->session->set_userdata($session_data);
				
				redirect(base_url());				
			}
			else
			{
				$this->session->set_flashdata('error_messagea','<div class="error_messagea">Invalid email or password !</div>');
				redirect(base_url().'pages/signin');
			}
		}
		else
		{
			 $this->load->view('pages/signin',$data);
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'pages/signin');
	}
	
	
	
	public function about_us()
	{
		$data['title']	= 'About us';
		$this->load->view('pages/about-us',$data);
	}
	
	public function not_found()
	{
		$data['title']	= '404 not found';
		$this->load->view('pages/404',$data);
	}
	
	public function search()
	{
		$data['title']	= 'Search';
		$this->load->view('pages/search',$data);
	}
	
	public function faq()
	{
		$data['title']	= 'FAQ';
		$this->load->view('pages/faq',$data);
	}
}
