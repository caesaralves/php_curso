<?php
/**
 * Created by PhpStorm.
 * User: caesaralves
 * Date: 27-07-2017
 * Time: 20:36
 */
class Routes
{
   private static $routes = array(
       "/contato" => "contato.php",
       "/empresa" => "empresa.php",
       "/produtos" => "produtos.php",
       "/servicos" => "servicos.php",
       "/welcome" => "welcome.php",
       "/procura" => "procura.php"
   );
   const DEFAULT_ROUTE = "/welcome";


    /**
     * @return boolean
     */
    public static function routeExists($route) {
       return isset(self::$routes[$route]) && file_exists(self::$routes[$route]);
   }


    /**
     * @param $route
     * @return string
     */
    public static function getRoute($route) {
        return self::$routes[$route];
   }

    /**
     * @return string
     */
    public static function getDefaultRoute() {
        return self::getRoute(self::DEFAULT_ROUTE);
   }

}