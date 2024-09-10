<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('login', 'LoginController::login');
$routes->get('signUp', 'LoginController::signUp');
$routes->post('usersignup', 'LoginController::usersignup');
$routes->get('donnet', 'Home::donnet');
$routes->get('dashboard', 'Home::back',['filter' => 'authGuard']);
$routes->get('formuser', 'LoginController::role');
$routes->get('logout', 'LoginController::logout');
// $routes->post('dashboard', 'Home::logins');

$routes->get('viewuser', 'LoginController::fetchuser',['filter' => 'authGuard']);
$routes->get('user/edit/(:num)', 'LoginController::edit/$1',['filter' => 'authGuard'],['filter' => 'authGuard']);
$routes->put('update/user/(:num)', 'LoginController::update/$1',['filter' => 'authGuard'],['filter' => 'authGuard']);
$routes->get('user/delete/(:num)', 'LoginController::delete/$1',['filter' => 'authGuard'],['filter' => 'authGuard']);



$routes->get('addcharity', 'CharityController::index',['filter' => 'authGuard']);
$routes->post('savecharity', 'CharityController::charitystore',['filter' => 'authGuard']);
$routes->get('viewcharity', 'CharityController::fetchuser',['filter' => 'authGuard']);
$routes->get('logincha', 'Home::chalogin');
$routes->post('loginchas', 'Home::loginauthcha');
$routes->get('charity/edit/(:num)', 'CharityController::edit/$1',['filter' => 'authGuard']);
$routes->get('charity/delete/(:num)', 'CharityController::delete/$1',['filter' => 'authGuard']);
$routes->put('update/charity/(:num)', 'CharityController::update/$1',['filter' => 'authGuard']);
$routes->put('update/charity/(:num)', 'CharityController::update/$1',['filter' => 'authGuard']);



$routes->get('addevent', 'EventController::index',['filter' => 'authGuard']);
$routes->get('eventphoto', 'EventController::multi');
$routes->get('viewphotos', 'EventController::eventphotos');
$routes->get('deletephoto/(:num)', 'EventController::deletephoto/$1');
$routes->post('multisave', 'EventController::multisave');
$routes->get('viewevent', 'EventController::fetchevent',['filter' => 'authGuard']);
$routes->post('savevent', 'EventController::eventsave',['filter' => 'authGuard']);
$routes->get('event/delete/(:num)', 'EventController::delete/$1',['filter' => 'authGuard']);
$routes->get('event/edit/(:num)', 'EventController::fetchsingel/$1',['filter' => 'authGuard']);
$routes->put('update/event/(:num)', 'EventController::update/$1',['filter' => 'authGuard']);

$routes->get('eventdonation/(:num)', 'Home::eventdonation/$1');

$routes->post('auth', 'LoginController::loginauth');
$routes->post('donetion', 'DonateController::index');
$routes->get('donetion', 'DonateController::don');


$routes->get('userdash', 'Home::userdash');
$routes->get('eventactivaty/(:num)', 'Home::eventac/$1');
$routes->get('cdashboard', 'Home::chadash');