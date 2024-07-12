<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MakananController::index');
$routes->get('/makanan', 'MakananController::index'); // Add this line
$routes->get('/makanan/create', 'MakananController::create');
$routes->post('/makanan/store', 'MakananController::store');
$routes->get('/makanan/edit/(:num)', 'MakananController::edit/$1');
$routes->post('/makanan/update/(:num)', 'MakananController::update/$1');
$routes->get('/makanan/delete/(:num)', 'MakananController::delete/$1');
