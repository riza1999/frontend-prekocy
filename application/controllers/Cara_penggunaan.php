<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cara_penggunaan extends CI_Controller {
    function __construct(){
        parent::__construct();
    }

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
		$active_class["active_class"] = "howTo";
		$this->load->view('template/header');
        $this->load->view('template/menu',$active_class);
        $this->load->view('cara_penggunaan_view');
        $this->load->view('template/footer');
        $this->load->view('template/script');
	}
}
