<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('articles', function ($routes) {
  $routes->get('/', 'Article::index');
  $routes->get('new', 'Article::create');
  $routes->get('(:any)', 'Article::detail/$1');
  $routes->post('save', 'Article::save');
});
