<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 17:33
 */

require __DIR__ . '/../../shared/Helper.php';
require __DIR__ . '/../connection/Database.php';
require __DIR__ . '/User.php';

$db = Database::getInstance();

try {
	$stmt = $db->prepare( 'SELECT * FROM user' );

	$stmt->execute();

	//$result = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');

	//$result = $stmt->fetchAll( PDO::FETCH_OBJ );

	$result = $stmt->fetchAll( PDO::FETCH_ASSOC );


} catch ( PDOException $e ) {

	Helper::printException( $e );

}
echo '<pre>';
var_dump( $result );
