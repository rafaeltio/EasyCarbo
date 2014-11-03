<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DadosMedicos
 *
 * @author Rafael S. Meneses
 */
class DadosMedicos {
    
    private $HGT, $fatorCorrecao, $meta;
    
    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function __get($name) {
        return $this->$name;
    }
    
    public function __construct() {
        $this->HGT = null;
        $this->fatorCorrecao = null;
        $this->meta = null;
    }
    
    public function __toString() {
        return 'HGT: '.$this->HGT.', fatorCorrecao: '.$this->fatorCorrecao.', meta: '.$this->meta;
    }

}
