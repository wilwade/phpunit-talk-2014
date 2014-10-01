<?php

function autoloader ($className) {
	$file = __DIR__ . "/" . $className . ".php";
	if(!file_exists($file))
		return false;
	include($file);
}
spl_autoload_register("autoloader");

