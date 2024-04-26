<?php
/*
    controllers/product.php
*/

namespace app\controllers;

use app\core\Controller;
use app\models\Product;
use app\core\Application;
use app\core\Request;
use app\models\Cart;
use app\models\CartDetail;
use app\models\CartItem;
use app\models\Category;
use app\models\Record;
use app\models\User;

class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $products = Product::getAllProducts();
        $this->setLayout('admin');
        return $this->render('/admin/products/products', [
            'products' => $products
        ]);
    }

    public function create(Request $request)
    {
        $productModel = new Product();
        $categories = Category::getAllCategories();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            $productModel->save();
            Application::$app->response->redirect('/admin/products');
        } else if ($request->getMethod() === 'get') {
            $products = Product::getAllProducts();
            $this->setLayout('admin');
            return $this->render('/admin/products/create_product', [
                'productModel' => $products,
                'categories' => $categories,
            ]);
        }
    }


    public function delete(Request $request)
    {
        if ($request->getMethod() === 'post') {
            $id = Application::$app->request->getParam('id');
            $productModel = Product::getProductDetail($id);
            $productModel->delete();
            return Application::$app->response->redirect('/admin/products');
        } else if ($request->getMethod() === 'get') {
            $id = Application::$app->request->getParam('id');
            $productModel = Product::getProductDetail($id);
            $this->setLayout('admin');
            return $this->render('/admin/products/delete_product', [
                'productModel' => $productModel
            ]);
        }
    }


    public function update(Request $request)
    {
        $id = Application::$app->request->getParam('id');
        $productModel = Product::getProductDetail($id);
        $categoryModel = Category::get($productModel->getCategoryId());
        $categories = Category::getAllCategories();
        if ($request->getMethod() === 'post') {
            $productModel->loadData($request->getBody());
            if(!empty($_POST['enable'])){$productModel->setEnable('on');}else{$productModel->setEnable('off');}
            $productModel->update($productModel);
            Application::$app->response->redirect('/admin/products');
        } else if ($request->getMethod() === 'get') {
            $this->setLayout('admin');    
            return $this->render('/admin/products/edit_product', [
                'productModel' => $productModel,
                'categoryModel' => $categoryModel,
                'categories' => $categories,
            ]);
        }
    }

    public function details(Request $request)
    {
        if ($request->getMethod() === 'get') {
            $id = Application::$app->request->getParam('id');
            $productModel = Product::getProductDetail($id);
            $this->setLayout('admin');
            return $this->render('/admin/products/details_product', [
                'productModel' => $productModel
            ]);
        }
    }

    public function product(Request $request)
    {
        $product_id = Application::$app->request->getParam('id');
        $product = Product::getProductDetail($product_id);
        if (Application::isGuest()) {
            Application::$app->response->redirect('/login');
        }
        $user_id = Application::$app->session->get('user');
        $user = User::getUserInfo($user_id);
        $cart_id = Application::$app->cart->id;
        $addToCart = false;

        if ($request->getMethod() === 'post') {
            $cart_id = Application::$app->cart->id;
            $cartDetail = new CartDetail(
                uniqid(),
                $product_id,
                $cart_id,
            );
            $cartDetail->save();

            $addToCart = true;
        }

        $data = array('product' => $product, 'addToCart' => $addToCart, 'user' => $user, 'items' => $cart_id);
        return $this->render('product_detail', $data);
    }
}