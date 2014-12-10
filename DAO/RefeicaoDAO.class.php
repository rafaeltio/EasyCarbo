<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RefeicaoDAO
 *
 * @author rafael
 */
interface RefeicaoDAO {
    
    public function salvar($refeicao);
    public function deletar($refeicao);
    public function pesquisar($refeicao);
    public function atualizar($refeicao);
    
}
