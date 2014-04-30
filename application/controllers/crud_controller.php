<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Crud_controller extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database();
        $this->load->helper('url');
 
        $this->load->library('grocery_CRUD');
 
    }
    public function menu()
    {
        $this->grocery_crud->set_table('menu');
        $output = $this->grocery_crud->render();
 
        $this->_example_output($output);        
    }
 
    function _example_output($output = null)
 
    {
        $this->load->view('header');
        $this->load->view('crud.php',$output);    
    }

}