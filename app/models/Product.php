<?php

namespace app\models;

use core\DB;
use core\Model;

class Product extends Model
{

    public function getData()
    {
        $PDO = DB::connect();
        try {
            $result = $PDO->query('SELECT * FROM products');
        } catch (\PDOException $e) {
            $e->getMessage();
        }
        return $result;
    }

    public function getProduct($product)
    {
        $PDO = DB::connect();
        try {
            $stmt = $PDO->prepare("SELECT 
                                        products.id,
                                        products.title, 
                                        products.price, 
                                        products.image, 
                                        feedbacks.name, 
                                        feedbacks.content FROM products 
                                            LEFT JOIN feedbacks on products.id = feedbacks.product_id 
                                                          WHERE products.id = ?");
            $stmt->execute(array($product));
            $result = $stmt->fetchAll();
        } catch (\PDOException $e) {
            $e->getMessage();
        }
        return $result;
    }
}