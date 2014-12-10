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
interface MedicoDAO {
    
    public function salvar($medico);
    public function deletar($medico);
    public function pesquisar($medico);
    public function atualizar($medico);
    
}
