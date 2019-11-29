<?php
$route = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($route);
var_dump($route);
