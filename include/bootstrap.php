<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'include/main.php';

$config = Setup::createAnnotationMetadataConfiguration(
    [ __DIR__ . '/../models'],
    DOCTRINE_CONFIG['DEV_MODE'],
    DOCTRINE_CONFIG['PROXY_DIR'],
    DOCTRINE_CONFIG['CACHE'],
    DOCTRINE_CONFIG['ALT_READER']
);

$connection = [
    'driver'    => 'pdo_mysql',
    'user'      => DATABASE['USERNAME'],
    'password'  => DATABASE['PASSWORD'],
    'host'      => DATABASE['HOSTNAME'],
    'port'      => DATABASE['PORT'],
    'dbname'    => DATABASE['NAME']
];

$entityManager = EntityManager::create($connection, $config);

?>