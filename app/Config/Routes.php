<?php

namespace Config;

use App\Controllers\AdminController;
use App\Controllers\CityController;
use App\Controllers\ContactController;
use App\Controllers\CountryController;
use App\Controllers\FacilityController;
use App\Controllers\HotelController;
use App\Controllers\PaymentController;
use App\Controllers\PaymentMethodController;
use App\Controllers\PlanController;
use App\Controllers\PromoController;
use App\Controllers\PromoTypeController;
use App\Controllers\RoomController;
use App\Controllers\TransactionController;
use App\Controllers\UserController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/mylogin', 'AuthController::loginView');
$routes->post('/login', 'AuthController::loginPost');
$routes->get('/myregister', 'AuthController::registerView');
$routes->post('/register', 'AuthController::registerPost');
$routes->get('/reset-password', 'AuthController::resetPasswordView');
$routes->post('/reset-password', 'AuthController::resetPasswordPost');
$routes->group('admin', function ($routes) {
    $routes->get('/dashboard', 'Home::dashboard', ['as' => 'dashboard']);
    $routes->get('payment/get-data', 'PaymentController::getData', ['as' => 'payment.get-data']);
    $routes->resource('admin', ['controller' => AdminController::class, 'except' => ['edit', 'show']]);
    $routes->get('admin/get-data', 'AdminController::getData', ['as' => 'admin.get-data']);
    $routes->resource('contact', ['controller' => ContactController::class, 'except' => ['edit', 'show']]);
    $routes->get('contact/get-data', 'ContactController::getData', ['as' => 'contact.get-data']);
    $routes->resource('country', ['controller' => CountryController::class, 'except' => ['edit', 'show']]);
    $routes->get('country/get-data', 'CountryController::getData', ['as' => 'country.get-data']);
    $routes->resource('city', ['controller' => CityController::class, 'except' => ['edit', 'show']]);
    $routes->get('city/get-data', 'CityController::getData', ['as' => 'city.get-data']);
    $routes->resource('facility', ['controller' => FacilityController::class, 'except' => ['edit', 'show']]);
    $routes->get('facility/get-data', 'FacilityController::getData', ['as' => 'facility.get-data']);
    $routes->resource('hotel', ['controller' => HotelController::class, 'except' => ['edit', 'show']]);
    $routes->get('hotel/get-data', 'HotelController::getData', ['as' => 'hotel.get-data']);
    $routes->resource('paymentMethod', ['controller' => PaymentMethodController::class, 'except' => ['edit', 'show']]);
    $routes->get('payment-method/get-data', 'PaymentMethodController::getData', ['as' => 'paymentMethod.get-data']);
    $routes->resource('payment', ['controller' => PaymentController::class, 'except' => ['edit', 'show']]);
    $routes->get('payment/get-data', 'PaymentController::getData', ['as' => 'payment.get-data']);
    $routes->resource('plan', ['controller' => PlanController::class, 'except' => ['edit', 'show']]);
    $routes->get('plan/get-data', 'PlanController::getData', ['as' => 'plan.get-data']);
    $routes->resource('promoType', ['controller' => PromoTypeController::class, 'except' => ['edit', 'show']]);
    $routes->get('promo-type/get-data', 'PromoTypeController::getData', ['as' => 'promoType.get-data']);
    $routes->resource('promo', ['controller' => PromoController::class, 'except' => ['edit', 'show']]);
    $routes->get('promo/get-data', 'PromoController::getData', ['as' => 'promo.get-data']);
    $routes->resource('room', ['controller' => RoomController::class, 'except' => ['edit', 'show']]);
    $routes->get('room/get-data', 'RoomController::getData', ['as' => 'room.get-data']);
    $routes->resource('transaction', ['controller' => TransactionController::class, 'except' => ['edit', 'show']]);
    $routes->get('transaction/get-data', 'TransactionController::getData', ['as' => 'transaction.get-data']);
    $routes->resource('user', ['controller' => UserController::class, 'except' => ['edit', 'show']]);
    $routes->get('user/get-data', 'UserController::getData', ['as' => 'user.get-data']);
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
