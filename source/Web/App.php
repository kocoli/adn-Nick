<?php

namespace Source\Web;

class App extends Controller
{
    public function __construct()
    {
        parent::__construct("app");
    }

    public function home (array $data): void
    {
        echo $this->view->render("home", []);
    }

    public function cart (array $data): void
    {
        echo $this->view->render("cart", []);
    }

    public function community (array $data): void
    {
        echo $this->view->render("community", []);
    }

    public function favorites (array $data): void
    {
        echo $this->view->render("favorites", []);
    }

    public function products (array $data): void
    {
        echo $this->view->render("products", []);
    }

    public function articles (array $data): void
    {
        echo $this->view->render("articles", []);
    }

    public function avaliation (array $data): void
    {
        echo $this->view->render("avaliation", []);
    }

    public function refund (array $data): void
    {
        echo $this->view->render("refund", []);
    }

    public function edit (array $data): void
    {
        echo $this->view->render("edit", []);
    }

    public function orders (array $data): void
    {
        echo $this->view->render("orders", []);
    }
}