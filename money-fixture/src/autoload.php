<?php

function autoloader ($className) {
	include(__DIR__ . "/" . $className . ".php");
}
spl_autoload_register("autoloader");

