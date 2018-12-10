<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 07.12.2018
 * Time: 17:09
 */
session_start();

if ( isset( $_POST['username'] ) ) {
	$_SESSION['username'] = $_POST['username'];
}

?>
<div>
    Session Values:
    <pre>
        <?php var_dump( $_SESSION ); ?>
    </pre>
</div>
