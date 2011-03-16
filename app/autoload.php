<?php

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony\\Cmf'                   => __DIR__.'/../src',
    'Symfony\\Bundle\\DoctrinePHPCRBundle' => __DIR__.'/../vendor/bundles',
    'Symfony'                        => __DIR__.'/../vendor/symfony/src',
    'Sandbox'                        => __DIR__.'/../src',
    'Liip\\FunctionalTestBundle'     => __DIR__.'/../vendor/bundles',
    'Doctrine\\Common'               => __DIR__.'/../vendor/doctrine/common/lib',
    'Doctrine\\ODM\\PHPCR'           => __DIR__.'/../vendor/doctrine-phpcr/lib',
    'Zend\\Log'                      => __DIR__.'/../vendor/zend-log',
    'Jackalope'                      => __DIR__.'/../vendor/phpcr-odm/lib/vendor/jackalope/src',
    'PHPCR'                          => __DIR__.'/../vendor/phpcr-odm/lib/vendor/jackalope/lib/phpcr/src',
));
$loader->registerPrefixes(array(
    'Twig_'            => __DIR__.'/../vendor/twig/lib',
));
$loader->register();
