<?php

    require_once 'include/main.php';

    define('PAGE_TITLE', 'Iniciá sesión');

    $userLevel = getCurrentLevel();

    if ($userLevel != USER_LEVEL['ANONYMOUS']) {
        header('location: index.php');

        exit();
    }

    require_once 'view/header.php';

?>

<h1> <?= PAGE_TITLE ?> </h1>

<p>
    Para continuar, iniciá sesión.
    <br>

    <form>
        <b> Nombre de usuario: </b> <br>
        <input  type="text"      id="username" /> <br>
        <br>
        <b> Contraseña: </b> <br>
        <input  type="password"  id="password" /> <br>
        <br>
        <small id="statusText"></small> <br>
        <br>
        <button type="button"    id="tryLoginBtn">
            Iniciar sesión
        </button>
    </form>
</p>

<script src="assets/js/login.js"></script>

<?php require_once 'view/footer.php'; ?>