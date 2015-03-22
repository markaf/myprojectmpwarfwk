<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 22/03/2015
 * Time: 3:36
 */

$routes = array(
    '/' => array(
        'controller' => 'Controllers\Home',
        'action' => 'login'
    ),
    '/login' => array(
        'controller' => 'Controllers\Home',
        'action' => 'login'
    ),
    '/register' => array(
        'controller' => 'Controllers\Home',
        'action' => 'Register'
    ),
    '/smarty' => array(
        'controller' => 'Controllers\Home',
        'action' => 'Smarty'
    )
);
return $routes;