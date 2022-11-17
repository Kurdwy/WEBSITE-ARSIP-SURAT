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
$routes->get('/landingpage', 'LandingPageController::index');

$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/login', 'LoginController::index');

$routes->get('/register', 'RegisterController::index');

$routes->get('/profil', 'ProfilController::index');

$routes->get('/', 'LandingPageController::index');
$routes->get('/suratmasuk', 'SuratMasukController::index');
$routes->get('/suratmasuk/create', 'SuratMasukController::create');
$routes->post('/suratmasuk/store', 'SuratMasukController::store');
$routes->get('/suratmasuk/edit/(:num)', 'SuratMasukController::edit/$1');
$routes->post('/suratmasuk/update/(:num)', 'SuratMasukController::update/$1');
$routes->delete('/suratmasuk/delete/(:num)', 'SuratMasukController::delete/$1');

$routes->get('/suratkeluar', 'SuratKeluarController::index');
$routes->get('/suratkeluar/create', 'SuratKeluarController::create');
$routes->post('/suratkeluar/store', 'SuratKeluarController::store');
$routes->get('/suratkeluar/edit/(:num)', 'SuratKeluarController::edit/$1');
$routes->post('/suratkeluar/update/(:num)', 'SuratKeluarController::update/$1');
$routes->delete('/suratkeluar/delete/(:num)', 'SuratKeluarController::delete/$1');
$routes->get('/index', 'LandingPageController::index');
$routes->post('/login/process', 'LoginController::process');
$routes->get('(:any)', 'Pages::view/$1');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');



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
