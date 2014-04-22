<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*/
class Login_model extends CI_Model {
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
}