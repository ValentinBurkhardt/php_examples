<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 16:42
 */

class Helper {

	static public function printException( Exception $e ) {
		echo '<pre>';
		echo sprintf( '<strong>%1s</strong><br />', $e->getMessage() );
		print_r( $e->getTraceAsString() );
		echo '</pre>';
	}

}
