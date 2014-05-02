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

		
        $this->db->order_by("menu_type.m_type", "asc"); 
        $this->db->select('menu.image, menu.name, menu.description, menu_type.m_type, menu.price')->from('menu')->join('menu_type','menu_type.id = menu.type');
        $query = $this->db->get();
        return $query;

	}

    function getSalad(){

       
        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Amanides');
        return $query;
       
        
    }

	function getSoup(){

        $this->db->where('type', "12"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getRice(){

        $this->db->where('type', "13"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getPasta(){

        $this->db->where('type', "14"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getMeat(){

        $this->db->where('type', "15"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getAfters(){

        $this->db->where('type', "17"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getWine(){

        $this->db->where('type', "18"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getStarters(){

        $this->db->where('type', "10"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    function getSeafood(){

        $this->db->where('type', "16"); 
        $query=$this->db->get('menu');
        
        return $query;
    }

    
}
