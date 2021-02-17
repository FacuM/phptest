<?php

    require_once 'view/header.php';

    require_once 'include/main.php';

    $userLevel = getCurrentLevel();
    $userLevelDescription = getLevelMeaning($userLevel);

    $allowedPaths = getAllowedPaths($userLevel);

    $renderedPaths = '';
    foreach ($allowedPaths as $allowedPath) {
        $renderedPaths .=
            '<li>
                <a href="' . $allowedPath . '">/' . $allowedPath . '</a>
            </li>';
    }

?>

<h1> ¡Hola! </h1>

<p>
    Esta es la página principal. <br>
    <br>
    Tu nivel actual es <b><?= $userLevelDescription ?></b> y podés acceder a las siguientes pantallas: <br>
    <ul>
        <?= $renderedPaths ?>
    </ul>

    <?php
        if ($userLevel === USER_LEVEL['ANONYMOUS']) {
            print '<a href="login"> Iniciá sesión </a>';
        }
    ?>
</p>

<?php require_once 'view/footer.php'; ?>