<?php

define('DATABASE', [
    'HOSTNAME'      => '127.0.0.1',
    'PORT'          => 3306,
    'USERNAME'      => 'root',
    'PASSWORD'      => '',
    'NAME'          => 'phptest',
    'ENCODING'      => 'utf8'
]);

define('USER_LEVEL', [
    'ANONYMOUS'     => 0,
    'USER'          => 1,
    'ADMINISTRATOR' => 2
]);

define('USER_ID_STORE', 'uid');

define('DOCTRINE_CONFIG', [
    'DEV_MODE'      => true,
    'PROXY_DIR'     => null,
    'CACHE'         => null,
    'ALT_READER'    => false
]);

?>