<?php

class Usuario extends CI_Model {    //Los Modelos deben extender de CI_Model
    
    private $idUsuario;
    private $user;
    private $pass;
    
    
    function __construct($user = "") {
        parent::__construct();
        $this->user = $user;
    }
    
    
    public function getIdUsuario(){
        return $this->idUsuario;}
    public function getUser(){
        return $this->user;}

    public function getPass(){
        return $this->pass;}
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;}

    public function setUser($user){
        $this->user = $user;}
    public function setPass($pass){
        $this->pass = $pass;}
    
       
}