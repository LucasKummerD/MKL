<?php


require 'helpers.php';
require 'classes/user.php';
require 'classes/Autenticacion.php';
require 'classes/JSONdb.php';
require 'classes/validacion.php';

$db = new JSONDB('users.json');
Auth::set();

?>