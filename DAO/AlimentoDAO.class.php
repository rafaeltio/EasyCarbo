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
interface AlimentoDAO {

    public function salvar($alimento);
    public function deletar($alimento);
    public function pesquisar($alimento);
    public function atualizar($alimento);
}
