<?php

namespace app\models;

use core\DB;

class Feedback
{
    public function addFeedback($name, $content, $product_id)
    {
        $PDO = DB::connect();
        try {
            $stmt = $PDO->prepare('INSERT INTO 
                                        feedbacks(id, name, content, product_id) VALUES (NULL, :name, :content, :product_id)');
            $stmt->execute(
                array('name' => $name,
                    'content' => $content,
                    'product_id' => $product_id));
        } catch (\PDOException $e) {
            $e->getMessage();
        }

    }
}