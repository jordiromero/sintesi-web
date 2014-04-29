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

        	$this->load->helper('url');

        	$this->load->helper('form');
        		//Carreguem el model
        	$this->load->model('restauria_model');
        		// Es carrega la llibreria form_validation.
        	$this->load->library('form_validation');
               
        	// Se li assigna la informació a la variable $user.
        	$this->user = @$this->session->userdata('logged_user');
    }

	public function index(){

		if(!@$this->user) redirect ('main/login');
		$this->load->view('header');
		$this->load->view('inici');
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
		$menu ['query'] = $this->restauria_model->getMenu();
		$this->load->view('menu',$menu);
	}

	public function setMenu(){
		if(!@$this->user) redirect ('main/login');
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
				$upload = $this->restauria_model->setMenu($image, $name, $description, $type);
				$this->load->view('header');
		    	$this->load->view('insert_menu',$data);
			}else{
			$this->load->view('header');
		    	$this->load->view('insert_menu');
		}
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
