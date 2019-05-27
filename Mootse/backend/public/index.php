<?php
require_once('../vendor/autoload.php');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Access-Control-Allow-Headers, access-control-allow-methods, Access-Control-Allow-Origin");

use TSE\workshop_tse_bibli\Router\Router;

$router = new Router();

echo $router->getResponse();
