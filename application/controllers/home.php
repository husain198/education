<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['title']	= 'Education';
		$this->load->view('home',$data);
	}
	
	public function shortcode()
	{
		$data['title']	= 'Short Code';
		$this->load->view('shortcode',$data);
	}
	
	public function blog_list()
	{
		$data['title']	= 'Short Code';
		$this->load->view('blog-list',$data);
	}
	
	public function blog_single()
	{
		$data['title']	= 'Short Code';
		$this->load->view('blog-single',$data);
	}
	
	public function course_list()
	{
		$data['title']	= 'Course Larg';
		$this->load->view('course-larg',$data);
	}
	
	public function course_grid()
	{
		$data['title']	= 'Course Grid';
		$this->load->view('course-grid',$data);
	}
	
	public function course_single()
	{
		$data['title']	= 'Course Single';
		$this->load->view('course-single',$data);
	}
	
	public function our_events()
	{
		$data['title']	= 'Our Events';
		$this->load->view('our-events',$data);
	}
	
	public function event_classic()
	{
		$data['title']	= 'Event Classic';
		$this->load->view('event-classic',$data);
	}
	
	public function event_single()
	{
		$data['title']	= 'Event Single';
		$this->load->view('event-single',$data);
	}
	
	public function team()
	{
		$data['title']	= 'Our Team';
		$this->load->view('team',$data);
	}
	
	public function services_classic()
	{
		$data['title']	= 'Services Classic';
		$this->load->view('services-classic',$data);
	}
	
	public function services_simple()
	{
		$data['title']	= 'Services Simple';
		$this->load->view('services-simple',$data);
	}
	
	public function contact_us()
	{
		$data['title']	= 'Contact Us';
		$this->load->view('contact-us',$data);
	}
	 
}
