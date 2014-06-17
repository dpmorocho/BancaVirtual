<?php
require('app/core/autoloader.php');

//rutas
Router::get('/', 'welcome@index');
Router::get('usuario', 'usuario@usuario');
Router::get('usuario/login', 'usuario@login');
Router::post('usuario/login', 'usuario@login');
Router::get('usuario/logout', 'usuario@logout');

Router::get('cuenta', 'cuenta@cuenta');
Router::get('cuenta/debito/(:num)', 'cuenta@debito');
Router::post('cuenta/debito/(:num)', 'cuenta@debito');
//por defecto
Router::error('error@index');

//ejecución
Router::dispatch();
ob_flush();
