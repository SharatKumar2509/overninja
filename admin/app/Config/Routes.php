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
$routes->get('/', 'Home::index');

$routes->get('/blog', 'Blog::index');
$routes->get('/blog/add', 'Blog::add');
$routes->post('/blog/add', 'Blog::add_blog');
$routes->get('/blog/edit/(:any)', 'Blog::edit/$1');
$routes->post('/blog/edit/(:any)', 'Blog::edit_blog/$1');
$routes->get('/blog/delete/(:any)', 'Blog::delete/$1');

$routes->get('/case-study', 'CaseStudy::index');

$routes->get('/testimonial', 'Testimonial::index');
$routes->get('/testimonial/add', 'Testimonial::add');
$routes->post('/testimonial/add', 'Testimonial::add_testimonial');
$routes->get('/testimonial/edit/(:any)', 'Testimonial::edit/$1');
$routes->post('/testimonial/edit/(:any)', 'Testimonial::edit_testimonial/$1');
$routes->get('/testimonial/delete/(:any)', 'Testimonial::delete/$1');

$routes->get('/statistics', 'Statistics::index');
$routes->post('/statistics/edit', 'Statistics::edit');

$routes->get('/login', 'Account::index');
$routes->post('/login', 'Account::login');
$routes->get('/logout', 'Account::logout');
$routes->get('/change-password', 'Account::change_password');
$routes->post('/change-password', 'Account::save_changes');

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
