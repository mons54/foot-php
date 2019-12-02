<?php
use Controllers\Errors;
use Controllers\Teams;

spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$params = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($params);

$route = $params[0] ? $params[0] : 'teams';

if ($route === 'teams') {
  $controller = new Teams;
  if (isset($params[1])) {
    $controller->showTeam($params[1]);
  } else {
    $controller->listTeams();
  }
} else {
  $controller = new Errors;
  $controller->error404();
}
