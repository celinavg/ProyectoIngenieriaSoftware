<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('UsuarioModelo');
        $this->load->library('session');
		$this->load->library('unit_test');
		include_once('./Facebook/autoload.php');
		$this->fb = new Facebook\Facebook([
  			'app_id' => '156118498233670',
  			'app_secret' => 'ca9fc4baea12054bc1f6227ca61fb6e3'
		]);
    }


	public function index()
	{

        if(isset($this->session->logedIn)){
            $this->load->view('PaginaPrincipal');
        }
        else{
			$helper = $this->fb->getRedirectLoginHelper();
			$permissions = ['email']; // optional
			$loginUrl = $helper->getLoginUrl('http://localhost/Proyecto/fbLoginCallback', $permissions);

			//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
			$data['loginUrl'] = $loginUrl;
		    $this->load->view('LoginPrincipal',$data);
        }
	}

    public function doLogIn(){
        $logedIn = $this->UsuarioModelo->login($this->input->post('correo_electronico'), $this->input->post('contrasena'));
        if(!$logedIn){
            $this->load->view('LoginPrincipal');
        }
        else{
            $this->session->logedIn = 1;
            $this->session->userId = $logedIn[0]->id_usuario;
            redirect('', 'refresh');
        }
    }

	public function LoginUnitTest(){
		$this->unit->run( $this->UsuarioModelo->login("cvg9506@gmail.com","Hachi123"), "is_array", "Log in Credenciales validas");
		$this->unit->run( $this->UsuarioModelo->login("CVG9506@gmail.com","Hachi123"), "is_array", "Log in Credenciales validas en mayusculas el correo");
		$this->unit->run( $this->UsuarioModelo->login("cvg9506@gmail.com ","Hachi123"), "is_array", "Log in Credenciales validas con un espacio al final del correo");
		$this->unit->run( $this->UsuarioModelo->login("cvg9506@gmail.com","Hachi123 "), "is_array", "Log in Credenciales validas con un espacio al final de la contraseña");
		$this->unit->run( $this->UsuarioModelo->login("cvg9506@gmail.com",""), false, "Log in Credenciales NO validas sin contraseña");
		$this->unit->run( $this->UsuarioModelo->login("","Hachi123"), false, "Log in Credenciales NO validas sin correo");
		$this->unit->run( $this->UsuarioModelo->login("",""), false, "Log in Credenciales NO validas sin correoy sin contraseña");
		echo $this->unit->report();
	}
}


 ?>
