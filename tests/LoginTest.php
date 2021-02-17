<?php

namespace UnitTestFiles\Test;
use PHPUnit\Framework\TestCase;

use User;

require_once 'include/main.php';

class LoginTest extends TestCase {
    public function testDatabase() {
        global $entityManager;

        $didConnect = true;

        try {
            $entityManager->getConnection()->connect();
        } catch (\Exception $exception) {
            $didConnect = false;
        }

        $this->assertTrue($didConnect);
    }
    public function testLogin() {
        $didTryLogin = true;

        try {
            User::findById(0); // doesn't matter if does exist or not
        } catch (\Exception $exception) {
            $didTryLogin = false;
        }

        $this->assertTrue($didTryLogin);
    }
}

?>