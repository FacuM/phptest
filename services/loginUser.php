<?php

chdir('..');

require_once 'include/main.php';

$request = json_decode(
    file_get_contents('php://input'),
    true
);

$response = [ 'result' => null ];

if (isset($request['operation'])) {
    switch ($request['operation']) {
        case 'tryLogin':

            if (
                isset($request['values'])
                &&
                isset($request['values']['username'])
                &&
                isset($request['values']['password'])
            ) {
                $values = &$request['values'];

                $user = User::findByParameters($values['username']);

                if (
                    $user != null
                    &&
                    password_verify($values['password'], $user->getPassword())
                ) {
                    $_SESSION[USER_ID_STORE] = $user->getId();

                    $response['result']['loggedIn'] = true;
                }

                print getJson($response);
            } else {
                print getJson($response);
            }

            break;
        default:
            print getJson($response);
    }
} else {
    print getJson($response);
}

?>