<?php
session_start();
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\Web");

// Rotas amigáveis da área Administrativa
$route->group("/admin");
$route->get("/", "Admin:home");
$route->get("/products", "Admin:products");
$route->group(null);

$route->get("/ops/{errcode}", "Site:error");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();