<?php

require_once("../include/functions.php");
require_once("../include/users.php");

$flash = "";
if (isset($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['firstname'], $_REQUEST['lastname'])) {
    if (Users::create_user($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['firstname'], $_REQUEST['lastname'], False)) {
        $flash = "Created '{$_REQUEST['username']}'!";
    }
    else {
        $flash = "Unable to create '{$_REQUEST['username']}'! Maybe it already exists?";
    }
}

if ($flash) {
?>
<strong><?=$flash?></strong>
<?php
}
?>

<form action="index.php" method="get">
    <input type="hidden" name="page" value="create">
    <fieldset>
        <label>Username:</label>
        <input name="username" required>
    </fieldset>
    <fieldset>
        <label>Password:</label>
        <input name="password" value="password" required>
    </fieldset>
    <fieldset>
        <label>Firstname:</label>
        <input name="firstname" required>
    </fieldset>
    <fieldset>
        <label>Lastname:</label>
        <input name="lastname" required>
    </fieldset>

    <input type="submit">
</form>
