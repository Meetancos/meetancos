<?php

use App\Domain\Sponsorship\SponsorshipRepository;
use \Pecee\SimpleRouter\SimpleRouter;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

SimpleRouter::setDefaultNamespace('\App\Controller');

$params = [
    'debug' => true,
    'cache' => false
];
if ($_ENV['APP_ENV'] === 'production') {
    $params['cache'] = __DIR__ . '/../resources/views/cache';
    $params['debug'] = 'false';
}

$twig = new Environment(
    new FilesystemLoader(__DIR__ . '/../resources/views'),
    $params
);

$sponsorships = (new SponsorshipRepository())->findAll();

SimpleRouter::get(
    '/',
    function () use ($twig) {
        return $twig->render('pages/home/index.html');
    }
);

SimpleRouter::get(
    '/contato',
    function () use ($twig) {
        $sponsorships = (new SponsorshipRepository())->findAll();
        return $twig->render('pages/contato/index.html');
    }
);

SimpleRouter::start();
