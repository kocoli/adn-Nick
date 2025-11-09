<?php

namespace Source\Web;

class Site extends Controller
{
    public function __construct()
    {
        parent::__construct("web");
    }

    public function home (array $data): void
    {
        echo $this->view->render("home", []);
    }

    public function about (): void
    {
        echo $this->view->render("about", []);
    }

    public function contact (): void
    {
        echo $this->view->render("contact", []);
    }

    public function faq (): void
    {
        echo $this->view->render("faq", []);
    }

    public function login (): void
    {
        echo $this->view->render("login", []);
    }

    public function register (): void
    {
        echo $this->view->render("register", []);
    }

}