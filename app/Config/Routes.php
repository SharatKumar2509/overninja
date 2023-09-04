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

$routes->get('/about', 'Home::about');

$routes->get('/services', 'Home::services');
$routes->get('/services/web-development', 'Home::web_development');
$routes->get('/services/mobile-app-development', 'Home::mobile_app_development');
$routes->get('/services/ecommerce-development', 'Home::ecommerce_development');
$routes->get('/services/it-support', 'Home::it_support');
$routes->get('/services/digital-marketing', 'Home::digital_marketing');
$routes->get('/services/game-development', 'Home::game_development');

$routes->get('/case-study', 'Home::portfolio');
$routes->get('/case-study/(:any)', 'Home::portfolio_detail/$1');

$routes->get('/industries-we-serve', 'Home::industries');

$routes->get('/blogs', 'Home::blogs');
$routes->get('/blogs/(:any)', 'Home::blogs/$1');
$routes->get('/blog/(:any)', 'Home::blog/$1');

$routes->get('/career', 'Home::career');

$routes->get('/hire-developer', 'Home::hire_developer');

$routes->get('/contact', 'Contact::index');
$routes->post('/contact', 'Contact::contact');

$routes->post('/subscribe', 'Contact::subscribe');

$routes->get('/terms-and-conditions', 'Home::terms');
$routes->get('/privacy-policy', 'Home::privacy');

$routes->get('/test', 'Home::test');

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
