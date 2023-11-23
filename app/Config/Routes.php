<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');

$routes->get('contratos', 'Maestros::contratos');
$routes->get('cuentas', 'Maestros::cuentas');


$routes->get('movfiducia', 'Movimientos::movfiducia');


$routes->get('beneficiarios', 'Informes::beneficiarios');
$routes->get('concilia', 'Informes::concilia');

