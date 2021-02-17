<?php

function getCurrentUser() {
    global $entityManager;

    return isset($_SESSION[USER_ID_STORE])
            ? $entityManager->find('User', $_SESSION[USER_ID_STORE])
            : null;
}

function getCurrentLevel() {
    $user = getCurrentUser();

    return $user == null
            ? USER_LEVEL['ANONYMOUS']
            : $user->getLevel();
}

function getLevelMeaning($userLevel) {
    $result = null;

    switch ($userLevel) {
        case USER_LEVEL['ANONYMOUS']:
            $result = 'anónimo';

            break;
        case USER_LEVEL['USER']:
            $result = 'usuario';

            break;
        case USER_LEVEL['ADMINISTRATOR']:
            $result = 'administrador';

            break;
    }

    return $result;
}

function getAllowedPaths($userLevel) {
    $result = [ 'uno', 'dos', 'tres' ];

    if ($userLevel >= USER_LEVEL['ADMINISTRATOR']) {
        $result[] = 'admin';
    } else if ($userLevel >= USER_LEVEL['USER']) {
        $result[] = 'user';
    }

    return $result;
}

function getJson($data) {
    return json_encode($data);
}

?>