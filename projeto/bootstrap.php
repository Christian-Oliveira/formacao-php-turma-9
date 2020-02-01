<?php

$autoloader = require __DIR__ . '/vendor/autoload.php';
Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);

// Project Configs
define('BASE_PATH', __DIR__);
define('HOME', 'http://localhost:3030/');
define('TEMPLATES', BASE_PATH . '/templates/');

// Database Configs
define('DB_NAME', 'loja_formacao_nove');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'UTF-8');

//PagSeguro
define('PAGSEGURO_EMAIL', 'christianoliveirati@gmail.com');
define('PAGSEGURO_TOKEN', 'EF86ACEAE5654181A719AF3F2DB5776D');
