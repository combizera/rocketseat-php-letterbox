<?php

function view($view, $data = []): void
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require "views/components/head.php";
}

function dump(...$dump): void
{
    echo '<pre>';
    var_dump($dump);
    echo '</pre>';
}

function dd(...$dump): void
{
    dump($dump);
    die();
}

function abort($code): void
{
    http_response_code($code);
    view($code);
    die();
}

function flash()
{
    return new Flash();
}

function config($key = null)
{
    $config = require 'config.php';

    if(strlen($key) > 0) {
        return $config[$key];
    }

    return $config;
}

function auth()
{
    if (!isset($_SESSION['auth'])) {
        return null;
    }

    return (object) $_SESSION['auth'];
}