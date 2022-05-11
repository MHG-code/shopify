<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Customers::index');
$routes->get('home', 'Customers::home');
$routes->get('banner', 'Customers::banner');

$routes->get('items/(:alpha)',  'Customers::items/$1');


// testing uri
$routes->match(['get', 'post'], 'abc', 'Testing::index');

$routes->match(['get', 'post'], 'admin/login', 'Admin::login' , ['filter' => 'Loggedin']);
// $routes->get('logout', 'Admin::logout');


// admin api's
// $routes->group('admin' , ['filter' => 'Auth'] ,  function($routes){
$routes->group('admin' ,  function($routes){
	
	// create migrations
	$routes->get('migrate', 'Migrate::index');
	
	// user ip address
	$routes->post('ip' , 'Admin::get_ip_address_of_user');
	
	// maintainance
	$routes->match(['get', 'post'], 'myprofile', 'Admin::my_profile');

	// otherroutes
	$routes->post('add_catg', 'Admin::add_catg');
	$routes->match(['get', 'post'], 'add_items', 'Admin::add_items');
	$routes->get('orders', 'Admin::orders');
	$routes->get('order_preview', 'Admin::order_preview');

	// logout
	$routes->get('logout', 'Admin::logout');


	// $routes->get('add_user', 'Admin::add_user');
});

$routes->get( 'add_cart', 'Customers::add_cart');
$routes->get( 'item_detail', 'Customers::item_detail');
$routes->match(['get', 'post'], 'order_book', 'Customers::order_book');
$routes->get('items' , 'Customers::items');

$routes->match(['get', 'post'], 'abc', 'Testing::index');
$routes->match(['get', 'post'], 'abchome', 'Testing::home');
$routes->match(['get', 'post'], 'abcnav', 'Testing::navbar');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
