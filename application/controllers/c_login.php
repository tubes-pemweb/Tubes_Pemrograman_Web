<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

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

	 public function __construct()
  	{
  		parent::__construct();
  		$this->load->model('User');
   	}

	 public function Register()
	{
        if($_POST['Password'] != null){
            if($this->User->Register()) {
                redirect('c_news/login');
            } else {
                redirect('c_news/login');
            }
        } else {
            redirect('c_news/Register');
        }
    }

	public function Login() {

       $user = $this->User->findUser();
         if($user != null){
           redirect('c_news');
         } else {
           redirect('c_news/Login');
         }
	 }


}
