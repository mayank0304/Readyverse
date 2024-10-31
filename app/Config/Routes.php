<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'TestController::index');
$routes->get('create', 'BookController::create'); // Show the create form
$routes->post('books/addBook', 'BookController::addBook'); // Handle form submission
$routes->get('books', 'BookController::listBooks'); // Route to list books
$routes->post('books/deleteBook/(:num)', 'BookController::deleteBook/$1'); // To delete a book
$routes->get('success', 'BookController::success'); // Maps '/success' to the success method in BookController

