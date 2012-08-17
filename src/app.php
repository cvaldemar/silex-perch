<?php

require_once __DIR__.'/../src/twig/Perch_Twig_Extension.php';

$app = new Silex\Application();

// registering service providers
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// configuring twig
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    $twig->addExtension(new \Perch_Twig_Extension());
    return $twig;
}));

return $app;