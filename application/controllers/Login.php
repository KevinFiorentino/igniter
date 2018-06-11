<?php

@session_start();

class Login extends CI_Controller { //Los Controladores deben extender de CI_Controller
    
    /**
     * El Constructor del Controlador carga los Modelos y los Helper que estaran disponibles en todas las funciones.
     * Tambien carga el Header asi se incorpora a todas las vistas.
     */
    public function __construct() {
        parent::__construct();
        $this->load->view("header");
        $this->load->helper("form");
        $this->load->model('negocio/UsuarioABM');
    }
    
    /** Login es el controlador por defecto de la app, se configura en 'config/routes.php'
     *  index() es la funcion por defecto de todos los controladores, llama a la vista iniciarSesion.
     *  El Footer se tiene que cargar despues de la vista.
     */  
    public function index() {      
        $this->load->view("iniciarSesion");
        $this->load->view('footer');
    }
    
    //Logear Usuario
    public function login() {
        
        //Capturar Inputs
        $useer = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        $uABM = new UsuarioABM();

        $usuario = $uABM->existeUser($useer, $pass);
        
        if($usuario != NULL) {
            //Usuario Existe redirecciona a la vista de Bienvenido
            $this->load->view('bienvenido');
            $this->load->view('footer');
        }
        else {
            //No Existe, redirecciona a la vista de iniciarSesion con el mensaje de error
            $_SESSION['errorLogin'] = "Error en el Logeo";
            $this->load->view('iniciarSesion');
            $this->load->view('footer');
        }
             
    }
    
    //Crear Usuario
    public function insert() {
        $useer = $this->input->post('user');
        $pass = $this->input->post('pass');
        
        $uABM = new UsuarioABM();
        
        $uABM->insertUsuario($useer, $pass);
        
        $this->load->view('bienvenido');
        $this->load->view('footer');
        
    }
    
}