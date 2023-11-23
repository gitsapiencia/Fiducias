<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $routes->get('/', 'Dashboard::index');


 //$routes->get('/', 'Auth::microsoft');

$routes->get('contratos', 'Maestros::contratos');
$routes->get('cuentas', 'Maestros::cuentas');


$routes->get('movfiducia', 'Movimientos::movfiducia');


$routes->get('beneficiarios', 'Informes::beneficiarios');
$routes->get('concilia', 'Informes::concilia');


// application/config/routes.php

$route['login/microsoft'] = 'Auth::microsoft';
$route['login/microsoft/callback'] = 'Auth::microsoft';

