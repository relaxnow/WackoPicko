<?php

require_once("../include/users.php");
require_once("../include/functions.php");

require_login();

Users::logout();

http_redirect("/");


?>
