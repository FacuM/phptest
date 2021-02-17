<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

require_once 'vendor/autoload.php';

require_once 'include/functions.php';
require_once 'include/constants.php';

require_once 'models/User.php';

require_once 'include/bootstrap.php';

?>