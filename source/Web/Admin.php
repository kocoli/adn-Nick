<?php

namespace Source\Web;

class Admin extends Controller
{
    public function __construct()
    {
        parent::__construct("admin");
    }

    public function home (array $data): void
    {
        echo $this->view->render("home", []);
    }

    public function products (): void
    {
        echo $this->view->render("products", []);
    }

    public function articles (): void
    {
        echo $this->view->render("articles", []);
    }

    public function orders (): void
    {
        echo $this->view->render("orders", []);
    }

    public function cupons (): void
    {
        echo $this->view->render("cupons", []);
    }

    public function customers (): void
    {
        echo $this->view->render("customers", []);
    }

    public function reports (): void
    {
        echo $this->view->render("reports", []);
    }

    public function settings (): void
    {
        echo $this->view->render("settings", []);
    }

}