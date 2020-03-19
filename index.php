<?php 
require 'config.php';

$routes = [
	[
		'url' => '#^$|^\?#', 
		'view' => 'home'
    ]	
];

$url = mb_substr($_SERVER['REQUEST_URI'], 1);
foreach ($routes as $route){
	if (preg_match($route['url'], $url)){
        $view = $route['view'];
		break;
	}
}
if (empty($view)){
	include PATH."views/404.php";
	exit();
}

require "controllers/{$view}_controller.php";
?>
