<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author rafael
 */
interface DadosMedicosDAO {
    
    public function salvar($dadosMedicos);
    public function deletar($dadosMedicos);
    public function pesquisar($dadosMedicos);
    public function atualizar($dadosMedicos);
    
}
