<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Refeicao
 *
 * @author rafael
 */
class Refeicao {
    
    private $id, $usuario, $alimento, $data, $hora;
    
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __construct($usuario, $alimento, $data, $hora) {
        $this->usuario = $usuario;
        $this->alimento = $alimento;
        $this->data = $data;
        $this->hora = $hora;
    }
    
    public function __toString() {
        return 'id: '.$this->id.', usuario: ['.$this->usuario.'], alimento: ['.
                $this->alimento.'], data: '.$this->data.', hora: '.$this->hora;
    }
}
