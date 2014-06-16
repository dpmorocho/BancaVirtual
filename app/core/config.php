<?php

set_exception_handler('logger::exception_handler');
set_error_handler('logger::error_handler');

//timezone
date_default_timezone_set('America/Guayaquil');

//dominio
define('DIR','http://localhost/');

//full url
$c = new Controller();
define('FULLDIR',DIR.implode('/',$c->getUrl()));

//db
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','cajero');
define('DB_USER','root');
define('DB_PASS','');
//define('PREFIX','smvc_');

//prefijo sesiones
define('SESSION_PREFIX','smvc_');

//Nombre Sitio
define('SITETITLE','Simulador Cajero Automático');

//template
Session::set('template','default');
