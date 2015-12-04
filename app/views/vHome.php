<?php

	class vHome extends Controller
	{
		protected $model;
		protected $view;

		function __construct()
		{
			parent::__construct();
			$this->model=new mHome();
			$this->view=new vHome();
			$this->tpl=Template::Load("Home");
		}
	}
?>