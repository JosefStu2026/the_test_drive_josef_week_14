<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('company-info', 'About::index');
// READ: Show all users
$routes->get('users', 'UserController::index');
// CREATE: Show the form, then process the form submission
$routes->get('users/new', 'UserController::create');
$routes->post('users', 'UserController::store');
// UPDATE: Show the edit form for a specific user, then process it
$routes->get('users/edit/(:num)', 'UserController::edit/$1');
$routes->post('users/update/(:num)', 'UserController::update/$1');
// DELETE: Remove a user
$routes->get('users/delete/(:num)', 'UserController::delete/$1');