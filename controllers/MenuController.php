<?php

namespace app\controllers;

use app\controllers\SiteController;
use app\models\Category;
use app\models\User;
use app\models\Cart;
use app\models\Product;
use app\core\Application;

class MenuController extends SiteController
{

    public function menu()
    {
        $category_id = Application::$app->request->getParam('category_id');
        if ($category_id == '') {
            $products = Product::getAllProducts();
        } else {
            $products = Product::getProductsByCategory($category_id);
        }

        $categories = Category::getAllCategories();
        $userData = '';
        if(!Application::isGuest() ){
            $user_id = Application::$app->session->get('user');
            $user = User::getUserInfo($user_id);
            $cart_id = Application::$app->cart->id;
            $userData = array('user' => $user, 'items' => $cart_id);
        }
        $data = array('products' => $products, 'categories' => $categories, 'user' => $userData);
        return $this->render('menu', $data);
    }

    public function search()
    {
        $body = Application::$app->request->getBody();
        $keyword = $body['keyword'];
        $products = Product::getProductsByKeyword($keyword);
        $categories = Category::getAllCategories();
        $data = array('products' => $products, 'categories' => $categories);
        return $this->render('menu', $data);
    }
}