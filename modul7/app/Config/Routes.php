<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('', ["filter" => "auth"], static function ($routes) {
  $routes->get('/', 'CRUDController::index');
  $routes->get('/tambahdata', 'CRUDController::tambah');
  $routes->post('/tambahdata', 'CRUDController::simpan');

  //Menampilkan data untuk diedit dri database
  $routes->get('/editdata/(:num)', 'CRUDController::edit/$1');

  //menangani method untuk edit data
  $routes->post('/editdata/(:num)', 'CRUDController::update/$1');

  $routes->delete('/hapusdata/(:num)', 'CRUDController::hapus/$1');

  $routes->get('/logout', 'AuthController::logout');
});

//Routes login
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
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
