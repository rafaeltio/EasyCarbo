<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Medico
 *
 * @author rafael
 */
class Medico {
    
    private $id, $nome, $email;
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $name;
    }
    
    public function __construct() {
        $this->nome = null;
        $this->email = null;
    }
    
    public function __toString() {
        return 'id: '.$this->id.', nome: '.$this->nome.', email: '.$this->email;
    }
}
