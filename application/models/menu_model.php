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
}