<?php



// ...

$routes->get('/', 'Dashboard::index');


$routes->get('contratos/(:num)?', 'Maestros::contratos/$1');
$routes->get('contratos', 'Maestros::contratos');

$routes->get('listacontratos', 'Maestros::listacontratos');
$routes->get('guardarContrato', 'Maestros::guardarContrato');






$routes->get('PruebaConexion', 'PruebaConexion::index');

$routes->get('cuentas', 'Maestros::cuentas');
$routes->get('movfiducia', 'Movimientos::movfiducia');
$routes->get('beneficiarios', 'Informes::beneficiarios');
$routes->get('concilia', 'Informes::concilia');

$routes->add('login/microsoft', 'Auth::microsoft');
$routes->add('login/microsoft/callback', 'Auth::microsoft');

// ...
$routes->setAutoRoute(false);