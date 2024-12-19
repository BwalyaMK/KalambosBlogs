<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //attempt 1
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::login');
$routes->match(['get', 'post'], 'auth/login', 'LoginController::login');
$routes->match(['get', 'post'], 'auth/signup', 'SignupController::signup');


//dash
$routes->get('/dashboard/dashboard', 'DashboardController::index');

// dash routes 
$routes->get('/dashboard', 'DashboardController::index');
$routes->get('/dashboard/blogs', 'DashboardController::blogs');
$routes->get('/dashboard/blog/(:num)', 'DashboardController::blog/$1'); // Show a single blog
$routes->get('/dashboard/createBlog', 'DashboardController::createBlog');
$routes->post('/dashboard/storeBlog', 'DashboardController::storeBlog');

$routes->get('/dashboard/editBlog/(:num)', 'DashboardController::editBlog/$1');
$routes->post('/dashboard/updateBlog/(:num)', 'DashboardController::updateBlog/$1');



// trying a different controller setup
$routes->get('auth/signup', 'SignupController::index');
$routes->post('auth/signup/register', 'SignupController::register');
$routes->match(['get', 'post'], '/signup', 'SignupController::signup');

// another attempt
$routes->get('/auth/register', function() { return view('home'); });
$routes->get('home', function () {
    return view('home');
});

$routes->get('/auth/signup', 'Auth::signup');
$routes->post('/auth/register', 'Auth::register');

//3 am

$routes->get('/home', 'Home::index');
$routes->match(['get', 'post'], '/auth/register', 'Auth::register');
$routes->get('/auth/login', 'Auth::login');

//wednesday attempts
$routes->get('/auth/signup', 'Auth::signup');
$routes->post('/auth/register', 'Auth::register');
$routes->get('/auth/login', 'Auth::login'); //This one is supposed to go to login, hopefully!
$routes->get('/home', 'Home::home'); // this has been changed from index to home

//a bunch more routes
$routes->get('auth/register', 'Auth::register'); // For loading the signup form
$routes->post('auth/register', 'Auth::register'); // For handling form submission
$routes->get('home', function () {
    return view('home');
}); // Home page
$routes->match(['get', 'post'], 'auth/register', 'Auth::register');
















