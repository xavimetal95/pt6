<?php
	
	require 'sys/request.php';
	class Core
	{
		static private $controller;
		static private $action;

		static function init()
		{
			//echo 'CORE arrenca app';
			//recuperar la request
			//echo $_SERVER['REQUEST_URI'];

			Request::retrieve();

			$controller=Request::getCont();
			self::$controller=$controller;
			//Coder::code($controller);

			$action=Request::getAct();
			self::$action=$action;
			//Coder::code($action);

			$params=Request::getParams();
			//Coder::codear($params);

			self::router();
		}

		static function router()
		{
			//redirects Control to respective controller
		   $route=(self::$controller!="")?self::$controller:'home';
		   $action=(self::$action!="")?self::$action:'home';
		   $fileroute=strtolower($route).'.php';
		   //if exists the file controller
		   if(is_readable(APP.'controllers'.DS.$fileroute)){
		      // create an instance of new controller
		      self::$controller=new $route(self::$params);
		      if (is_callable(array(self::$controller,$action))){
		        //if exists the method in object controller
		            call_user_func(array(self::$controller, $action));
		         }
		      else{ echo "Unexistent method!";}
		    }
		    else{
		      self::$controller=new Error;
		   }
			/*//make an instance controller
			$contr_call=(self::$controller!="")?self::$controller:'Home';
			$action_call=(self::$action!="")?self::$action:'home';
			$filename=$contr_call.'.php';
			$filecontroller=APP.'controllers'.DS.ucfirst($filename);
			
			if(is_readable($filecontroller))
			{
				$cont=new $contr_call();
				if (is_callable(array($cont,$action_call))) 
				{
					call_user_func(array($cont,$action_call));
				}else
				{
					//echo 'No action!';
				}
			}else
			{
				//echo 'No controller!';
			}*/
		}
	}

?>