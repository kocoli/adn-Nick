<?php
session_start();
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\Web");

$route->get("/", "Site:home");
$route->get("/about", "Site:about");
$route->get("/contact", "Site:contact");
$route->get("/faqs","Site:faqs");
$route->get("/login","Site:login");
$route->get("/register","Site:register");

//Rotas amigáveis da área App
$route->group("/app");
$route->get("/", "App:home");
$route->get("/cart", "App:cart");
$route->get("/community", "App:community");
$route->get("/favorites", "App:favorites");
$route->get("/products", "App:products");
$route->get("/articles", "App:articles");
$route->get("/avaliation", "App:avaliation");
$route->get("/refund", "App:refund");
$route->get("/edit", "App:edit");
$route->get("/orders", "App:orders");
$route->group(null);

// Rotas amigáveis da área Administrativa
$route->group("/admin");
$route->get("/", "Admin:home");
$route->get("/products", "Admin:products");
$route->get("/articles", "Admin:articles");
$route->get("/orders", "Admin:orders");
$route->get("/cupons", "Admin:cupons");
$route->get("/customers", "Admin:customers");
$route->get("/reports", "Admin:reports");
$route->get("/settings", "Admin:settings");
$route->group(null);

$route->get("/ops/{errcode}", "Site:error");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();