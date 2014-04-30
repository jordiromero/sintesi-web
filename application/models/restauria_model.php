<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*/
class Restauria_model extends CI_Model {
    protected $table;
    protected $id;
    
    public function __construct() {
        parent::__construct();
        $this->table='users';
        $this->id='id';
    }
    
    function get($username='', $password='') {
        return $this->db->get_where(
            $this->table, array(
                'username' => $username,
                'password' => $password
            )
        )->row();
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
