<?php
    session_start();
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set("display_errors",'1');

    define("DD", realpath('../'));
    ini_set("session.save_path", DD . "/storage/sessions");


    echo $_SESSION['test'];
    session_destroy();