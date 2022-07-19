<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/category', 'Home::category');
$routes->get('/contact', 'Home::contact');
$routes->get('/search-result', 'Home::search_result');
$routes->get('/single-post', 'Home::single_post');

// routes of Admin start here

$routes->get('/admin', 'Admin::index');
$routes->get('/index','Admin::index');
$routes->get('/login', 'Admin::login');
$routes->get('/register', 'Admin::register');
$routes->get('/users-profile', 'Admin::users_profile');
$routes->get('/pages-contact', 'Admin::pages_contact');
$routes->get('/international', 'Admin::international');
$routes->get('/national', 'Admin::national');
$routes->get('/sports', 'Admin::sports');
$routes->get('/politics', 'Admin::politics');
$routes->get('/entertainment', 'Admin::entertainment');
$routes->get('/forms', 'Admin::forms');
//$routes->get('/admin/pages/pages-registerindex', 'Register::index');


$routes->post('/login', 'Login::login');
$routes->post('/register', 'Register::register');
$routes->post('/forms', 'Forms::forms');
//$routes->post('/upload', 'Forms::upload');





// $routes->post('/pages_login', 'a::register');


//$routes->get('/admin/pages/pages-login','Login::login');
//$routes->post('/index','Login::loginn');










// routes of admin end here


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
