<?php
// Load config
require_once "config/config.php";

// Load Libraries
// require_once "libraries/Core.php";
// require_once "libraries/Controller.php";
// require_once "libraries/Database.php";

// AutoLoad core libraries
spl_autoload_register(function ($classname) {
    require_once "libraries/" . $classname . ".php";
});
