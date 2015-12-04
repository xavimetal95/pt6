<?php
	class Session
	{
		//crear 
		static function iniciar()
		{
			session_start();
			echo 'Sesion iniciada</br>';
			echo 'session_id:'.session_id().'</br>';
		}

		//valores
		static function set($name, $value)
		{
			$_SESSION[$name]=$value;
		}

		//devolver 
		static function get($name)
		{
			if (isset ( $_SESSION [$name] ))
			{
				return $_SESSION [$name];
			}
			else 
			{
				return false;
			}
		}

		//borrar
		static function borrar($name)
		{
			unset ( $_SESSION [$name] );
			echo 'Borrados datos';
		}
		//finalizar
		static function finalizar()
		{
			$_SESSION=array();
			session_destroy();
			echo 'Sesion finalizada';
		}
	}
?>