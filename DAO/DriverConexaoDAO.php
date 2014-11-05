<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DriverConexaoDAO
 *
 * @author rafael
 */
class DriverConexaoDAO extends PDO {
    
	private $dsn = 'mysql:host=localhost;port=3306;dbname=NOMEDOBANCO';
	private $user = 'USUARIODOBANCO';
	private $password = 'SENHADOBANCO';
	public $handle = null;
	
	public function __construct() {
            try {
		if ( $this->handle == null ){
                    $dbh = parent::__construct( $this->dsn , $this->user , $this->password );
                    $this->handle = $dbh;
                    return $this->handle;
		}
            } catch (PDOException $e){
			echo 'Conexão falhou. Erro: ' . $e->getMessage( );
			return false;
            }
	}

	public function __destruct() {
		$this->handle = NULL;
	}

}
