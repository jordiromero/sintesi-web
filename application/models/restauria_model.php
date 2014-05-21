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

  

    //Consulta el tipus d'usuari
    function getUserType($user_type_id){
        $data = $this->db->get_where('users',array('users_type_id' => $user_type_id ));
        return $data->row();
       
        

    }

    function setUserForm($name, $surname,  $email, $username, $pass, $user_id){
        
        
        $data = array(
            'name' =>$name,
            'surname' =>$surname,
            'email' =>$email,
            'username' =>$username,
            'password' =>$pass,
            'users_type_id' => $user_id);

        return $this->db->insert('users',$data);

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

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Sopes');
        return $query;
    }

    function getRice(){

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Arrosos');
        return $query;
    }

    function getPasta(){

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Pasta');
        return $query;
    }

    function getMeat(){

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Carn');
        return $query;
    }

    function getAfters(){

       $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Postres');
        return $query;
    }

    function getWine(){

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Vins');
        return $query;
    }

    function getStarters(){

       $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Entrants');
        return $query;
    }

    function getSeafood(){

        $sql="SELECT image, name, description, price FROM menu where  type = (select id from menu_type where m_type = ?)";
        $query=$this->db->query($sql,'Peixos');
        return $query;
    }

    
}
