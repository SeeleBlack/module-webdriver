<?php

    if (!headers_sent()) header('Content-Type: text/html; charset=UTF-8');

    if (stream_resolve_include_path(__DIR__ . '/../sandbox/c3.php')) {
        require_once __DIR__ . '/../sandbox/c3.php';
    } else {
        require_once __DIR__ . '/../claypit/c3.php';
    }

    require_once('glue.php');
    require_once('data.php');
    require_once('controllers.php');

    $urls = array(
        '/' => 'index',
        '/info' => 'info',
        '/login' => 'login',
        '/form/(field|select|checkbox|file|textarea|hidden|complex|button|radio|empty)(#)?' => 'form'
    );

    glue::stick($urls);
?>