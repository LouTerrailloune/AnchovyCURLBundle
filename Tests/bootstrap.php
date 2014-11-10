<?php

if (file_exists($file = __DIR__ . '/../vendor/.composer/autoload.php')) {
    $autoload = require_once $file;
} else {
    throw new RuntimeException('Install dependencies to run test suite.');
}
