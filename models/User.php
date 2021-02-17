<?php

use Doctrine\ORM\Mapping as ORM;

require_once 'include/main.php';

/**
 * @ORM\Entity
 * @ORM\Table(name="t_users")
 */
class User {
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue
     */
    private $id;

    /** @ORM\Column(length=255) */
    private $username;

    /** @ORM\Column(length=255) */
    private $password;

    /** @ORM\Column(type="smallint") */
    private $level;

    function __construct() {
        if ($this->level == null) {
            $this->level = USER_LEVEL['ANONYMOUS'];
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_ARGON2ID);
    }

    public function getLevel() {
        return $this->level;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public static function findById($id) {
        global $entityManager;

        return $entityManager->find(self::class, $id);
    }

    public static function findByParameters($username) {
        global $entityManager;

        return $entityManager->getRepository(self::class)->findOneBy([ 'username' => $username ]);
    }
}

?>