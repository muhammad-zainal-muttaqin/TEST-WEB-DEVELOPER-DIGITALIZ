<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'DashboardController::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('dashboard', 'DashboardController::index');
$routes->get('dashboard/showMaterials/(:num)', 'DashboardController::showMaterials/$1');


$routes->get('/courses', 'CourseController::index');
$routes->get('courses', 'CourseController::index');
$routes->get('courses/create', 'CourseController::create');
$routes->post('courses/store', 'CourseController::store');
$routes->get('courses/edit/(:segment)', 'CourseController::edit/$1');
$routes->post('courses/update/(:segment)', 'CourseController::update/$1');
$routes->get('courses/delete/(:segment)', 'CourseController::delete/$1');

$routes->group('materials', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('', 'MaterialController::index');
    $routes->get('create', 'MaterialController::create');
    $routes->post('store', 'MaterialController::store');
    $routes->get('edit/(:segment)', 'MaterialController::edit/$1');
    $routes->post('update/(:segment)', 'MaterialController::update/$1');
    $routes->get('delete/(:segment)', 'MaterialController::delete/$1');

    // Menambahkan rute untuk metode addToCourse
    $routes->post('addToCourse', 'MaterialController::addToCourse');
});
