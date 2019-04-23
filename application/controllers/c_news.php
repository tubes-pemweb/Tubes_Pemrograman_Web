<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_news extends CI_Controller {

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
		$this->load->view('v_header_home');
		$this->load->view('v_home');
		$this->load->view('v_footer_travel');
	}
	public function news()
	{
		$this->load->view('v_header');
		$this->load->view('v_news');
		$this->load->view('v_footer');
	}
	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$this->load->view('register');
	}
	public function tech(){
		$this->load->view('v_header');
		$this->load->view('v_news_tech');
		$this->load->view('v_footer');
	}
	public function sport() {
		$this->load->view('v_header_sport');
		$this->load->view('v_sport');
		$this->load->view('v_footer');
	}
	public function travel() {
		$this->load->view('v_header_travel');
		$this->load->view('v_travel');
		$this->load->view('v_footer_travel');

	}
	public function discovery(){
		$this->load->view('v_header_discovery');
		$this->load->view('v_travel_discovery');
		$this->load->view('v_footer_travel');
	}
	public function weather(){

		$this->load->view('v_weather');
		$this->load->view('v_footer_travel');
	}

}
