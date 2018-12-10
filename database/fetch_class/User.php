<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 17:31
 */

class User {

	private $id;
	private $username;
	private $password;

	public function __construct() {
	}

	public function checkPassword( $password ) {
		return password_verify( $password, $this->password );
	}

}
