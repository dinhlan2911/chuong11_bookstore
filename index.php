<?php

require_once 'define.php';

spl_autoload_register(function ($clasName) {
	require_once LIBRARY_PATH . "{$clasName}.php";
});

$bootstrap = new Bootstrap();
$bootstrap->init();