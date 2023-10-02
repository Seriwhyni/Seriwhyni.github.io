<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'JerukSambal::index');
$routes->get('/beranda', 'JerukSambal::beranda');
$routes->get('/data-suhu', 'JerukSambal::suhu');
$routes->get('/data-gas', 'JerukSambal::gas');
$routes->get('/grafik', 'JerukSambal::grafik');
