<?php
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set("display_errors",'1');

    $cookieName = "test";
    $cookieValue = "How are you, where do you live";
    $expire = time()+3600;
    $path = "/";
    $domain = "localhost";
    $secure = false;
    $httpOnly = true;

    $ok = setcookie(
        $cookieName,
        $cookieValue,
        $expire,
        $path,
        $domain,
        $secure,
        $httpOnly
    );
    if($ok){
        echo "COOKIE OK!";
    }