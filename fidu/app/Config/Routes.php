<?php



// ...

$routes->get('/', 'Dashboard::index');


$routes->get('contratos/(:num)?', 'Maestros::contratos/$1');
$routes->get('contratos', 'Maestros::contratos');
$routes->get('listacontratos', 'Maestros::listacontratos');
$routes->post('guardarContrato', 'Maestros::guardarContrato');



$routes->get('listacuentas', 'Maestros::listacuentas');
$routes->get('cuentas/(:num)?', 'Maestros::cuentas/$1');
$routes->post('guardarCuenta', 'Maestros::guardarCuenta');
$routes->get('cuentas', 'Maestros::cuentas');

$routes->get('operadores/(:num)?', 'Maestros::operadores/$1');
$routes->get('operadores', 'Maestros::operadores');
$routes->get('listaoperadores', 'Maestros::listaoperadores');
$routes->post('guardarOperador', 'Maestros::guardarOperador');


$routes->get('fondos/(:num)?', 'Maestros::fondos/$1');
$routes->get('fondos', 'Maestros::fondos');
$routes->get('listafondos', 'Maestros::listafondos');
$routes->post('guardarFondo', 'Maestros::guardarFondo');














// Para la lista de movimientos de fiducia
$routes->get('listamovfiducia', 'Movimientos::listamovfiducia');
$routes->get('movfiducia/(:num)?', 'Movimientos::movfiducia/$1');
$routes->post('guardarMovFiducia', 'Movimientos::guardarMovFiducia');
$routes->get('movfiducia', 'Movimientos::movfiducia'); // Este enlace debe llevar a la vista de creación de movimientos de fiducia







$routes->get('beneficiarios', 'Informes::beneficiarios');
$routes->get('concilia', 'Informes::concilia');

$routes->add('login/microsoft', 'Auth::microsoft');
$routes->add('login/microsoft/callback', 'Auth::microsoft');



$routes->get('PruebaConexion', 'PruebaConexion::index');

// ...
$routes->setAutoRoute(false);