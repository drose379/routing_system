<?php

require 'router.php';

$router = new Router($controller);

//pass in a dummy url instead of $_SERVER["PATH-INFO"] for now
$router->run("/articles/story5");