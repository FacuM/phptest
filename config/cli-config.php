<?php
// cli-config.php
require_once 'include/bootstrap.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

?>