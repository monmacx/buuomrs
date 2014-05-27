<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
  {
      parent::__construct();
     
     // Load Model
     // $this->load->model('Mydb','mydb');
  }

	public function index()
	{
		$this->load->view('sign_in');
                echo "Hello";
	}
}

/* End of file manage.php */
/* Location: ./application/controllers/manage.php */