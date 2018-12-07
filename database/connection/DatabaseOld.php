<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 16:26
 */

class DatabaseOld {

	private $config = [
		'host'     => 'localhost',
		'dbname'   => 'test',
		'username' => 'root',
		'password' => '',
	];

	public function __construct() {
		try {
			$dsn = sprintf( 'mysql:host:%1s;dbname=%1s', $this->config['host'], $this->config['dbname'] );
			return new PDO( $dsn, $this->config['username'], $this->config['password'] );
		} catch ( Exception $e ) {
			Helper::printException( $e );
		}

	}
}
