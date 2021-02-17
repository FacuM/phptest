<?php

if (defined('REQUIRED_LEVEL') && getCurrentLevel() != REQUIRED_LEVEL) {
    header('location: index.php');

    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
                if (defined('PAGE_TITLE')) {
                    print PAGE_TITLE . ' | ';
                }
            ?> Evaluación técnica
        </title>
    </head>
    <body>