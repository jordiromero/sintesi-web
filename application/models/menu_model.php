<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function getMenu(){

		$query=$this->db->get('menu');
		return $query;
	}

	function setMenu($image, $name, $description, $type){

		$data = array(
			'image'=>$image,
			'name'=>$name,
			'description'=>$description,
			'type'=>$type);
		return $this->db->insert('menu',$data);
	}
}