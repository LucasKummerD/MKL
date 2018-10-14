<?php


require 'helpers.php';
require 'classes/User.php';
require 'classes/Autenticacion.php';
require 'classes/JSONdb.php';
require 'classes/Validacion.php';

$db = new JSONDB('users.json');
Auth::set();

?>