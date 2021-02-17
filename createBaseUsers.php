<?php

    header('location: index.php');

    require_once 'include/main.php';

    foreach ([
        'user'  => USER_LEVEL['USER'],
        'admin' => USER_LEVEL['ADMINISTRATOR']
    ] as $key => $value) {
        $user = new User();

        $user->setUsername($key);
        $user->setPassword($key);

        $user->setLevel($value);

        $entityManager->persist($user);
    }

    $entityManager->flush();

    require_once 'view/footer.php';

?>