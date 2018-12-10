<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 16:21
 */

class Database {

	protected static $config = [
		'host'     => 'localhost',
		'dbname'   => 'test',
		'username' => 'root',
		'password' => '',
	];

	protected static $__instance;

	protected function __construct() {
	}

	/**
	 * @return PDO
	 */
	public static function getInstance() {

		if ( empty( self::$__instance ) ) {
			try {
				$dsn = sprintf( 'mysql:host=%1s;dbname=%1s', self::$config['host'], self::$config['dbname'] );
				/*echo $dsn;*/
				self::$__instance = new PDO( $dsn, self::$config['username'], self::$config['password'] );

				self::$__instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

			} catch ( Exception $e ) {
				Helper::printException( $e );
			}
		}

		return self::$__instance;
	}

}
