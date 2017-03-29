<?php

if (!file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
    throw new RuntimeException("Init dependencies before use.");
}

require $autoload;
