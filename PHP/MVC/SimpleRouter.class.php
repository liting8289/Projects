<?php
class SimpleRouter{
    // 路由陣列，存儲我們定義的路由
    private $routes;

    // 這個方法用於將定義的路由加入到 $routes 陣列
    function route(string $path, Callable $closure) {
        $this->routes[$path] = $closure;
    }

    // 執行特定的路由
    function execute() {
        $path = !empty($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO'] :'/';

        /**檢測給定路由是否被定義，或者執行默認的 '/' 首頁路由。 */
        if (array_key_exists($path, $this->routes)) {
            $this->routes[$path]();
        } else {
            $this->routes['/']();
        }
    }
   
}
?>

