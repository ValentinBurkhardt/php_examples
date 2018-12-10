<?php
/**
 * Created by PhpStorm.
 * User: burkhardt
 * Date: 10.12.2018
 * Time: 14:17
 */

// require __DIR__ . '/init.php';

?>

<form action="view_2.php" method="get">
    <label for="username">
        Benutzername:
    </label>
    <input type="text" name="username" required id="username">
    <input type="hidden" name="user_id" value="42" id="user_id">
    <button type="submit">
        Speichern
    </button>
</form>
