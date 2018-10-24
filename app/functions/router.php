<?php

	/*
	* Router.php
	* Fichier de gestion des routes
	*/
    
    function getCurrentUri(){
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        return $uri;
    }

    function getRoutes(){
        $base_url = getCurrentUri();
        $u_routes = array();
        $routes_exp = explode('/', $base_url);
        foreach($routes_exp as $route)
        {
            if(trim($route) != '')
                array_push($u_routes, $route);
        }
        return $u_routes;
    }

    function findRoute($routes){
    	$page = "";
    	$page_title = "";
    	$routes_arr = getRoutes();
    	if(sizeof($routes_arr) == 0){
    		$page = "home";
    		$page_title = "Accueil";
    	}
    	else {
    		$query = $routes_arr[0];
	    	foreach ($routes as $r) {
                $route = explode(":", $r);
				if ($query == $route[0]){
					$page = $route[0];
					$page_title = $route[1];
                    break;
				}
	    	}
	    }
    	if($page == "" && $page_title == ""){
    		$page = "404";
    		$page_title = "Error";
    	}

    	return array($page, $page_title);
    }