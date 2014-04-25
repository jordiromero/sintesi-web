<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menucontroller extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('menu_model');
		$this->load->helper('url');
	}

	public function getMenu(){
		$this->load->view('header');
		$menu ['query'] = $this->menu_model->getMenu();
		$this->load->view('menu',$menu);
	}

}