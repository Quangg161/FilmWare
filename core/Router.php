<?php

namespace app\core;



class Router
{

    protected array $routers = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routers['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routers['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routers[$method][$path] ?? false;
        // If no method for such path exist return error 404
        if ($callback === false) {
            $this->response->setStateCode(404);
            return $this->renderView('_404');
            exit;
        }
        //If a callback for such request of path exist render it
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        // Array i used when calling a method from a class
        if (is_array($callback)) {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        return call_user_func($callback, $this->request);
    }

    //  Render the View to the browser 
    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderViewContent($view, $params);

        // param = [[],[]]
        // Search for the content placeholder from the layout and replace it with the viewContent
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    // return layout of the view
    protected function layoutContent()
    {
        $layout = Application::$app->controller->layout;
        ob_start();
        // Goto views folder to get the layout php
        include_once __DIR__ . "/../views/layouts/$layout.php";
        return ob_get_clean();
    }

    // render content of the view
    protected function renderViewContent($view, $params = [])
    {
        foreach ($params as $key => $param) {
            
            // if $key is a name then $$key is a name variable
            $$key = $param;
        }
        //Start output caching
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        //Return the buffer (of what is rendered) then cleanup the buffer
        return ob_get_clean();
    }

    // render only the content without layout
    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }
}