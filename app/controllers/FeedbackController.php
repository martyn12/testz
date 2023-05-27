<?php

namespace app\controllers;

use app\models\Feedback;
use core\DB;
use core\View;

class FeedbackController
{
    public function __construct()
    {
        $this->model = new Feedback();
        $this->view = new View();
    }

    public function add()
    {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (isset($_POST['content'])) {
            $content = $_POST['content'];
        }
        if (isset($_POST['product_id'])) {
            $product_id = $_POST['product_id'];
        }
        $this->model->addFeedback($name, $content, $product_id);
        header("Location: /main/product/{$product_id}");
        exit();
    }
    
}