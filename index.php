<?php
	//first phase
	ini_set('display_errors','on');

	error_reporting(E_ALL);

	//define('DS',DIRECTORY_SEPARATOR);
	//define('ROOT',realpath(dirname(__FILE__)).DS);
	//to access filesystem
	//define('APP',ROOT.'app'.DS);
	//define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));
	// it could be in another file
	/*echo DS.'</br>';
	echo ROOT.'</br>';
	echo APP.'</br>';
	echo APP_W.'</br>';
	*/
	//echo $_SERVER['REQUEST_URI'];

	include 'config.php';
	require 'sys/core.php';
	require 'sys/helper.php';
	require 'sys/registry.php';
	require 'sys/controller.php';
	require 'sys/session.php';

	/*Session::iniciar();
	Session::set("Xavi", "Probando, 1, 2");
	$ses=Session::get("Xavi");
	Coder::codear($ses);
	Session::borrar("Xavi");
	Session::finalizar();*/

	Core::init();
?>