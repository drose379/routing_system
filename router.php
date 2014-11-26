<?php

require 'controllers.php';


class Router {
// \d === a number and + === any number. () creates a subpattern to use later. To name a subpattern: ?<>. /articles/story(?<storyid>\d+)
protected $routes = ["/articles/story(?<storyid>\d+)" => "control1"];
					
public function match($url) {
	foreach ($this->routes as $pattern => $action) {
		// # === delemeters. ^ === start of string. $ === end of string. i === case-insensitive. So if pattern is inside the url.
		// $params will be the parts of the Url, EX. /articles and /story1.
		if (preg_match("#^$pattern$#i",$url,$matches)) {
			return [$action,$matches];
		}
	}
}

public function run($url) {
	//Run is called on index page, gets the action and paraters from the URL with match, and calls the action and passes the params below.
	list($action,$matches) = $this->match($url); //Giving null
	var_dump($matches[storyid]);
}

//Need to pass params to the action (correct controller)
//A set/get params method that can be called in the controller



}