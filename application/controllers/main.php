<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){

        parent::__construct();

        	//Carreguem el fitxer database.php
        	$this->load->database();
        	//Carreguem la llibreria grocery_CRUD
            $this->load->library('grocery_CRUD');

        	$this->load->helper('url');

        	$this->load->helper('form');
        		//Carreguem el model
        	$this->load->model('restauria_model');

        	//$this->load->model('grocery_crud_model');
        		// Es carrega la llibreria form_validation.
        	$this->load->library('form_validation');
            
        	// Se li assigna la informació a la variable $user.
        	$this->user = @$this->session->userdata('logged_user');
    }

	public function index(){

		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('inici');
		//$this->load->view('footer');
			
	}

	public function login() {

        $data = array();

        // Afegim les regles necesaries.
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Generem un missatge d'error personalitzat per a l'acció 'required'
        $this->form_validation->set_message('required', 'El camp %s es requerit.');
        
        // Si no està buit $_POST
        if(!empty($_POST)) {
            // Si les regles es cumpleixen, entrem a la condició.
            if ($this->form_validation->run() == TRUE) {

                // Obtenim la informació del usuari des de el model login_model.
                $logged_user = $this->restauria_model->get($_POST['username'], $_POST['password']);

                // Si existeix l'usuari creem la sessió i redirigim al index.
                if($logged_user) {
                    $this->session->set_userdata('logged_user', $logged_user);
                    redirect('main/index');
                } else {
                    // sino s' activa el error_login.
                    $data['error_login'] = TRUE;
                }
            }
        }

        $this->load->view('login_view', $data);
	}

	public function logout() {
        $this->session->unset_userdata('logged_user');
        redirect('main/index');
    }

	public function getMenu(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getMenu();
		$this->load->view('menu',$menu);
		$this->load->view('footer');
	}

	public function getSalad(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getSalad();
		$this->load->view('salad',$menu);
		$this->load->view('footer');
	}

	public function getSoup(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getSoup();
		$this->load->view('soup',$menu);
		$this->load->view('footer');
	}

	public function getRice(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getRice();
		$this->load->view('rice',$menu);
		$this->load->view('footer');
	}

	public function getPasta(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getPasta();
		$this->load->view('pasta',$menu);
		$this->load->view('footer');
	}

	public function getMeat(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getMeat();
		$this->load->view('meat',$menu);
		$this->load->view('footer');
	}

	public function getAfters(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getAfters();
		$this->load->view('afters',$menu);
		$this->load->view('footer');
	}

	public function getWine(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getWine();
		$this->load->view('wine',$menu);
		$this->load->view('footer');
	}

	public function getStarters(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getStarters();
		$this->load->view('starters',$menu);
		$this->load->view('footer');
	}

	public function getSeafood(){
		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('tab');
		$menu ['query'] = $this->restauria_model->getSeafood();
		$this->load->view('seafood',$menu);
		$this->load->view('footer');
	}








	public function setMenu(){

		//if(!@$this->user) redirect ('main/login');
		$this->grocery_crud->set_table('menu');
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->columns('name','description','type','price');
		$this->grocery_crud->set_relation('type','menu_type','m_type');
		$this->grocery_crud->set_field_upload('image','assets/images/menu');
		$output = $this->grocery_crud->render();
		$this->_output_setMenu($output);
	}

	public function _output_setMenu($output = null){
        $this->load->view('header');
        $this->load->view('insert_menu', $output);
        $this->load->view('footer');
    } 

    public function facebook_login(){

    	$fb_config = array(

    		'appId' => '572546732844311',
    		'secret' =>'70e061a0d07ff3910e60a0e0596065f8',

    		);
    	
    	$this->load->library('facebook',$fb_config);
    	$user = null;
    	$user_profile = null;
    	$user = $this->facebook->getUser();

    	if($user){

    		try{
    			$user_profile = $this->facebook->api('/me');
    		} catch (FacebookApiException $e){
    				show_error(print_r($e, TRUE), 500);
    		}
    	}

    	$this->data['facebook'] = $this->facebook;
    	$this->data['user'] = $user;
    	$this->data['user_profile'] = $user_profile;

    	$this->load->view('crud',$this->data);
    }











}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>