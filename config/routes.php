<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
//    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    // examples route and agr
    $routes->connect('/', ['controller' => 'Tests', 'action' => 'index']);
//    $routes->connect('tests/:arg1/:arg2', ['controller' => 'Tests', 'action' =>
//        'index'], ['pass' => ['arg1', 'arg2']]);
    // example generates url
    $routes->connect('/generate', ['controller' => 'Generates', 'action' => 'index']);
//    example redirect url
    $routes->connect('/generate2', ['controller' => 'Tests', 'action' => 'index']);
    $routes->redirect('/generate1', 'http://tutorialspoint.com/');
    $routes->connect('/generate_url', ['controller' => 'Generates', 'action' => 'index']);
    // example controller
    $routes->connect('/redirectcontroller', ['
         controller' => 'Generates', 'action' => 'index']);

    $routes->connect('/redirectcontroller2', ['
         controller' => 'Redirects', 'action' => 'action2']);
    // example extends
    $routes->connect('extend', ['controller' => 'Extends', 'action' => 'index']);
    // example element
    $routes->connect('/elementexample', ['controller' => 'Elems', 'action' => 'index']);
    // example working with database
    $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
    $routes->connect('/users', ['controller' => 'Users', 'action' => 'index']);
    $routes->connect('/users/edit', ['controller' => 'Users', 'action' => 'edit']);
    // example authenticate 
    $routes->connect('/auth', ['controller' => 'Authexs', 'action' => 'index']);
    $routes->connect('/login', ['controller' => 'Authexs', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Authexs', 'action' => 'logout']);
    // example error
    $routes->connect('/exception/:arg1/:arg2', ['controller' => 'Exps', 'action' => 'index'], ['pass' => ['arg1', 'arg2']]);
    // example log
    $routes->connect('logex', ['controller' => 'Logexs', 'action' => 'index']);
    //example form handling
    $routes->connect('register', ['controller' => 'Registrations', 'action' => 'index']);
    // example multi languages
    $routes->connect('locale', ['controller' => 'Localizations', 'action' => 'index']);
    // example email
    $routes->connect('/email', ['controller' => 'Emails', 'action' => 'index']);
    // session
    $routes->connect('/sessionobject', ['controller' => 'Sessions', 'action' => 'index']);
    $routes->connect('/sessionread', ['controller' => 'Sessions', 'action' => 'retrieve_session_data']);
    $routes->connect('/sessionwrite', ['controller' => 'Sessions', 'action' => 'write_session_data']);
    $routes->connect('/sessioncheck', ['controller' => 'Sessions', 'action' => 'check_session_data']);
    $routes->connect('/sessiondelete', ['controller' => 'Sessions', 'action' => 'delete_session_data']);
    $routes->connect('/sessiondestroy', ['controller' => 'Sessions', 'action' => 'destroy_session_data']);
    //example cookie
    $routes->connect('cookie/write', ['controller' => 'Cookies', 'action' => 'write_cookie']);
    $routes->connect('cookie/read', ['controller' => 'Cookies', 'action' => 'read_cookie']);
    $routes->connect('cookie/check', ['controller' => 'Cookies', 'action' => 'check_cookie']);
    $routes->connect('cookie/delete', ['controller' => 'Cookies', 'action' => 'delete_cookie']);
    $routes->connect('login',['controller'=>'Logins','action'=>'index']);
    
    // example validate
     $routes->connect('validation',['controller'=>'Valids','action'=>'index']);
     // example upload
      $routes->connect('/upload/add',['controller'=>'Uploads','action'=>'add']);
      
      $routes->connect('/articles/add',['controller'=>'Articles','action'=>'add']);
      
      // example tinymce
      $routes->connect('/tinymce/add',['controller'=>'TinyMCE','action'=>'add']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);


    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
