<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/register', 'RegisterController::index');
$routes->post('/store', 'Home::store');
$routes->post('/update', 'Home::update');
$routes->get('/view', 'ViewController::index');
$routes->get('/viewFetch', 'ViewController::fetch');
$routes->post('/dologin', 'LoginController::do_login');
$routes->post('/doregister', 'RegisterController::do_register');
$routes->get('/logout', 'LoginController::logout');

