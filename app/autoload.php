<?php

// BO/bootstrap/autoload.php

require_once '../vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

$loader->registerNamespace('Symfony\\Component\\HttpFoundation', '../vendor/symfony/http-foundation');