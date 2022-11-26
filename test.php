<?php

require __DIR__ . '/vendor/autoload.php';
use ArRas\BeaCukai\Configurator;

Configurator::setPphJsonContent();

echo Configurator::getPphJsonContent();
