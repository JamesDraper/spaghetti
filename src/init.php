<?php

if (version_compare(PHP_VERSION, '8.5.1', '<')) {
    exit('Spaghetti requires PHP version 8.5.1 or greater.');
}

require __DIR__ . '/autoload.php';
