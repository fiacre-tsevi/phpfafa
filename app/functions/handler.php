<?php

	/*
	* Handler.php
	* Fichier des fonctions d'inclusion des éléments du dossier assets
	*/

	$assets = "assets";

	function css($name){
		return $GLOBALS["assets"] . '/css/' .$name;
	}

	function js($name){
		return $GLOBALS["assets"] . '/js/' .$name;
	}

	function fonts($name){
		return $GLOBALS["assets"] . '/fonts/' .$name;
	}

	function img($name){
		return $GLOBALS["assets"] . '/images/' .$name;
	}

	function active($nav){
		if($GLOBALS["page"] == $nav) echo "active";
	}