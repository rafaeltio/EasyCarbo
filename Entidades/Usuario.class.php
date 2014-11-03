<?php
require 'DadosMedicos.class.php';
require 'Medico.class.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Rafael S. Meneses
 */
class Usuario {

    private $id, 
            $nome, 
            $email, 
            $senha, 
            $dadosMedicos,
            $medico;
    
    public function __set($name, $value) {
        if($name == 'senha'){
            $this->$name = hash('sha512', $value);
            return;
        }
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $this->$name;
    }

    public function __toString() {
        return 'id: '.$this->id.', nome: '.$this->nome.', email: '.$this->email.
                ', senha: '.$this->senha.', dadosMedicos: ['.$this->dadosMedicos
                .'], medico: ['.$this->medico.']';
    }
    
    public function __construct($nome, $email, $senha) {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $this->senha = hash('sha512', $senha);
            $this->dadosMedicos = new DadosMedicos();
            $this->medico = new Medico();
    }

}
