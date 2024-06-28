<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'register_user', '_controller' => 'App\\Controller\\UserController::registerUser'], null, null, null, false, false, null]],
        '/catalog' => [[['_route' => 'catalog', '_controller' => 'App\\Controller\\StorefrontController::index'], null, null, null, false, false, null]],
        '/catalog/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/catalog/order/create' => [[['_route' => 'create_order', '_controller' => 'App\\Controller\\OrderController::createOrder'], null, null, null, false, false, null]],
        '/catalog/order/created' => [[['_route' => 'show_ty_page', '_controller' => 'App\\Controller\\OrderController::showTYPage'], null, null, null, false, false, null]],
        '/admin/catalog' => [[['_route' => 'admin_catalog', '_controller' => 'App\\Controller\\StorefrontController::showAdminCatalog'], null, null, null, false, false, null]],
        '/admin/add-form' => [[['_route' => 'add_pizza_form', '_controller' => 'App\\Controller\\AddPizzaController::index'], null, null, null, false, false, null]],
        '/admin/add' => [[['_route' => 'add_pizza', '_controller' => 'App\\Controller\\AddPizzaController::addPizza'], null, null, null, false, false, null]],
        '/admin/catalog/delete' => [[['_route' => 'delete', '_controller' => 'App\\Controller\\StorefrontController::deletePizza'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_login_form', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\AdminController::findAdmin'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
