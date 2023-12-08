<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/mainblog', 'Mainblog::mainblog');
$routes->get('/blog(:any)', 'Blog::post/$1');
$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');
$routes->get('/index', 'Pages::index');
$routes->get('/index.html', 'Pages::index');
$routes->get('/(:alphanum)', 'Pages::pages/$1');




