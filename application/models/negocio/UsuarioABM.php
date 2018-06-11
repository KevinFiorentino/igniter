<?php

class UsuarioABM extends CI_Model {
    
    /** Cargamos el modelo que le corresponde al ABM y el driver para acceder a la BD.
     *  la BD se configura en 'config/database.php'
     */
    function __construct() {
        parent::__construct();
        $this->load->model('usuario');
        $this->load->database();
    }
    
    function traerUsuarios() {
        
        $query = $this->db->query('SELECT * FROM usuario');
        //$query = $this->db->get('usuario');
        
        foreach($query -> result_array()  as  $row) {
            echo $row['useer'];
        }
        
    }
    
    //Validar Logeo
    function existeUser($useer, $pass) {
        $query = $this->db->query("SELECT * FROM usuario WHERE usuario.useer = '$useer'");
        $usuario = NULL;
        
        foreach($query -> result_array()  as  $row) {          
            if($pass == $row['pass']) {
                $usuario = new Usuario($row['useer']);
                $usuario->setIdUsuario($row['idusuario']);
            }           
        }
        
        return $usuario;
    }
    
    //Insertar Usuario
    function insertUsuario($useer, $pass) {       
        $query = $this->db->query("INSERT INTO public.usuario(useer, pass) VALUES ('$useer', '$pass');");
        
        if($query == 1) {
            $_SESSION['insert'] = "Usuario Agregado Exitosamente !!";
        }
        else {
            $_SESSION['insert'] = "Error al Agregar el Usuario";
        }
    }
    
}

?>