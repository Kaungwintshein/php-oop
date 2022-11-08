<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set("display_errors",'1');

    define("DD", realpath('../'));
    ini_set("session.save_path", DD . "/storage/sessions");

    session_start();
    echo session_id();
    $_SESSION['test'] = "Hello";

?>