<?php

namespace core;

class Controller
{
    public $view;
    public $model;

    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {

    }
}