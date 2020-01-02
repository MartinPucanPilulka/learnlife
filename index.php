<?php

	require 'functions.php';

	$database = require 'core/bootstrap.php';

	
	$uri = trim($_SERVER['REQUEST_URI'], '/');

	$router = Router::load('routes.php');
		
	require $router->direct($uri);
