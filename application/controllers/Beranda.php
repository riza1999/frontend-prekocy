<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
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
		$active_class["active_class"] = "home";
		$this->load->view('template/header');
        $this->load->view('template/menu',$active_class);
        $this->load->view('homeview');
        $this->load->view('template/footer');
        $this->load->view('template/script');
	}

	public function card()
	{
		$this->load->view('card_view');
	}

	public function download($filename = NULL) {
        // load download helder
        $this->load->helper('download');
        // read file contents
        $data = file_get_contents(base_url('/assets/'.$filename));
        force_download($filename, $data);
    }
}
