<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 16:21
 */


require __DIR__ . '/DatabaseOld.php';
require __DIR__ . '/Database.php';


$db  = new DatabaseOld();
$db1 = new DatabaseOld();

echo '<pre>';
var_dump( $db, $db1 );


/*$db = Database::getInstance();
$db1 = Database::getInstance();

echo '<pre>';
var_dump( $db, $db1 );*/
