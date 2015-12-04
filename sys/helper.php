<?php
	
	spl_autoload_register(null,false);
	spl_autoload_register('MAutoload::SysLoader');
	class MAutoload
	{
		static function SysLoader($class)
		{
			$filename=strtolower($class).'php';
			$file=ROOT.'sys'.DS.$filename;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		static function Contloader($class)
		{
			$filename=strtolower($class).'.php';
			$file=APP.'controllers'.DS.$filename;
			if(!file_exists($file))
			{
				return false;
			}
			include $file;
		}

		static function ModLoader($class)
		{
			$filename = strtolower($class) . '.php';
			$file =APP.'models'.DS.$filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}

		static function VieLoader($class)
		{
			$filename = strtolower($class) . '.php';
			$file =APP.'views'.DS.$filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}

	}

	/**
	*Coder
	*makes var_dump easy
	*@author xavi
	**/

	class Coder
	{
		static function code($var)
		{
			echo '<pre>'.$var.'</pre>';
		}

		static function codear($var)
		{
			echo '<pre>'.var_dump($var).'</pre>';
		}
	}

?>