<?php

namespace app\models;

use app\core\CartModel;
use app\core\Controller;
use app\core\Database;
use app\core\DBModel;

class CartDetail extends DBModel
{
    public string $id = '';
    public string $product_id = '';
    public string $cart_id = '';

    public function __construct(
        $order_detail_id = '',
        $product_id = '',
        $cart_id = '',
    ) {
        $this->order_detail_id = $order_detail_id;
        $this->product_id = $product_id;
        $this->cart_id = $cart_id;
    }

    public static function tableName(): string
    {
        return 'cart_detail';
    }

    public function attributes(): array
    {
        return ['order_detail_id', 'product_id', 'cart_id'];
    }

    public function labels(): array
    {
        return
            [
                'order_detail_id' => 'Id',
                'product_id' => 'Product ID',
                'cart_id' => 'Cart ID',
                'name' => 'Product name',
                'price' => 'Price',
                'description' => 'Description',
            ];
    }

    public function rules(): array
    {
        return [];
    }

    public function save()
    {
        return parent::save();
    }
}