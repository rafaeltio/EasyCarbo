<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alimento
 *
 * @author Rafael S. Meneses
 */
class Alimento {
    
    private $nome, 
            $CHOPorUnidade, 
            $unidade;

    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __toString() {
        return 'nome: '.$this->nome.', CHOPorUnidade: '.$this->CHOPorUnidade.
                ', unidade: '.$this->unidade;
    }
            
    public function __construct($nome, $CHOPorUnidade, $unidade) {
        $this->nome = $nome;
        $this->CHOPorUnidade = $CHOPorUnidade;
        $this->unidade = $unidade;
    }

    
}
