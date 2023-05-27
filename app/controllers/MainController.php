<?php

namespace app\controllers;

use app\models\Product;
use core\Controller;
use core\View;

class MainController extends Controller
{

    public function __construct()
    {
        $this->model = new Product();
        $this->view = new View();
    }

    public function index()
    {
        $data = $this->model->getData();
        $this->view->render('home.php', 'layout.php', $data);
    }

    public function product($product)
    {
        $data = $this->model->getProduct($product);
        $this->view->render('product.php', 'layout.php', $data);
    }

    public function error()
    {
        $this->view->render('404.php', 'layout.php');
    }

}