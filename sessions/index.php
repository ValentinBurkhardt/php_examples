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

<h2>Session Inhalt</h2>
<hr>
<pre>
<?php echo sprintf( 'Session ID: %1s', session_id() ); ?>
<br />
<?php var_dump( $_SESSION ); ?>
</pre>
<hr>
<form action="" method="post">
    <label for="username">
        Benutzername:
    </label>
    <input type="text" name="username" required id="username">
    <button type="submit">
        Speichern
    </button>
</form>
