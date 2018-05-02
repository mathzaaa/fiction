<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
								$this->load->helper(array('form', 'url', 'file','email','language'));
								/*if(!isset($this->session->language)){
									$this->session->language = "english";
								}*/
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
	//โหลด แสดงผล หน้าแรก
	public function index()
	{
		$this->lang->load('index_lang', $this->session->language);
		$data['error_email_missing'] = $this->lang->line('error_email_missing');
		echo $this->session->language;

		$this->load->view ('header');
		$this->load->view ('home/index',$data);
		/*if(!isset($_SESSION['token'])){
			  redirect('/fiction/login/', 'location');
		}
		else{
			$this->load->model('fiction_model');
			$data['query'] = $this->fiction_model->get_dashboard();
			$data['select_department'] = $this->fiction_model->get_department();
			$data['title'] = "DASHBOARD";
			$this->load->view ('fiction/menu', $data);
			$this->load->view("fiction/dashboard", $data);
		}*/
	}

	function switchLanguage($language = NULL) {
			$language = $this->input->post("language");
	   $language = ($language != "") ? $language : "english";
			$this->session->language = $language;
			//echo "Success";
	    //redirect(base_url());
  }

}
