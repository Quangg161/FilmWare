<?php

namespace app\models;

use app\core\CartModel;
use app\core\Database;
use app\core\DBModel;

class CartItem extends DBModel
{
    public string $id = '';
    public string $product_id = '';
    public string $cart_id = '';
    public string $category_id = '';
    public string $name = '';
    public float $price = 0;
    public string $description = '';
    public string $image_url = '';

    public function __construct(
        $order_detail_id,
        $product_id,
        $cart_id,
        $category_id = '',
        $name = '',
        $price = 0,
        $description = '',
        $image_url = '',
    ) {
        $this->order_detail_id = $order_detail_id;
        $this->product_id = $product_id;
        $this->cart_id = $cart_id;
        $this->category_id = $category_id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image_url = $image_url;
    }
    // Remove later
    public function getTotalPrice()
    {
        return $this->price;
    }

    public static function tableName(): string
    {
        return 'cart_detail';
    }

    public function attributes(): array
    {
        return ['order_detail_id', 'product_id', 'cart_id', 'category_id', 'name', 'price', 'description', 'image_url'];
    }

    public function labels(): array
    {
        return
            [
                'order_detail_id' => 'Id',
                'product_id' => 'Product Id',
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

    public function getDisplayInfo(): string
    {
        return $this->list . ' ' . $this->status;
    }

    public static function getProducts($cart_id)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query(
            "SELECT product_id
            FROM cart_detail JOIN products ON cart_detail.product_id = products.id 
            WHERE cart_detail.cart_id = '" . $cart_id . "';"
        );

        foreach ($req->fetchAll() as $item) {
            $list[] = $item['product_id'];
        }
        return $list;
    }
    public static function getCartItem($cart_id)
    {
        $list = [];
        $db = Database::getInstance();
        $req = $db->query(
            "SELECT *
            FROM cart_detail JOIN products ON cart_detail.product_id = products.id 
            WHERE cart_detail.cart_id = '" . $cart_id . "';"
        );

        foreach ($req->fetchAll() as $item) {
            $list[] = new
                CartItem(
                    $item['order_detail_id'],
                    $item['product_id'],
                    $item['cart_id'],
                    $item['category_id'],
                    $item['name'],
                    $item['price'],
                    $item['description'],
                    $item['image_url'],
                );
        }
        return $list;
    }

    public static function deleteItem($id)
    {
        $sql = "DELETE FROM cart_detail WHERE order_detail_id ='" . $id . "'";
        $stmt = self::prepare($sql);
        $stmt->execute();
        return true;
    }


}