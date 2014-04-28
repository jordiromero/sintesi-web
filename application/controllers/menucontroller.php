<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menucontroller extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->model('menu_model');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	public function getMenu(){
		$this->load->view('header');
		$menu ['query'] = $this->menu_model->getMenu();
		$this->load->view('menu',$menu);
	}

	public function setMenu(){
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_message('required', 'El camp no pot estar buit');
		if($this->form_validation->run()==TRUE){
			$config['upload_path']='/sintesi/assets/image/menu/';
			$this->load->library('upload',$config);
			
				$file_info=$this->upload->data();
				$data=array('upload_data'=>$this->upload->data());
				$image=$file_info['file_name'];
				$name=$this->input->post('name');
				$description=$this->input->post('description');
				$type=$this->input->post('type');
				$upload = $this->menu_model->setMenu($image, $name, $description, $type);
				$this->load->view('header');
		    	$this->load->view('insert_menu',$data);
			}else{
			$this->load->view('header');
		    $this->load->view('insert_menu');
		}
		
	}

}