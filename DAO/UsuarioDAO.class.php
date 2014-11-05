<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author rafael
 */
interface UsuarioDAO {
    
    public function salvar($usuario);
    public function deletar($usuario);
    public function pesquisar($usuario);
    public function atualizar($usuario);
    
}
