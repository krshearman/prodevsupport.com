<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/*$routes->get('/', 'Home::index');*/


$routes->get('samples', 'Samples');
$routes->get('/test', 'Test::test');
$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');
$routes->get('/index', 'Pages::index');
$routes->get('/index.html', 'Pages::index');
$routes->get('/(:alphanum)', 'Pages::pages/$1');
/*$routes->get('/samples/(:any)', 'Samples::samples/$1');*/



