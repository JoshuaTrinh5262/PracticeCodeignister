<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['']                      = 'main/index';

$route['admin']                 = 'adminController/login';
$route['admin/dashboard']       = 'adminController/dashboard';
$route['admin/signin']          = 'adminController/signin';
$route['admin/signout']         = 'adminController/signout';
$route['admin/login']           = 'adminController/login';
$route['admin/register']        = 'adminController/register';
$route['admin/forgot_password'] = 'adminController/forgot_password';

$route['admin/staffs']          = 'staffController/index';
$route['admin/staff/(:num)']    = 'staffController/staff/$1';
$route['admin/handle_staff']    = 'staffController/handle_staff';

$route['admin/authors']         = 'authorController/index';
$route['admin/author/(:num)']   = 'authorController/author/$1';
$route['admin/handle_author']   = 'authorController/handle_author';

$route['admin/genres']          = 'genreController/index';
$route['admin/genre/(:num)']    = 'genreController/genre/$1';
$route['admin/handle_genre']    = 'genreController/handle_genre';

$route['admin/types']           = 'typeController/index';
$route['admin/type/(:num)']     = 'typeController/type/$1';
$route['admin/handle_type']     = 'typeController/handle_type';

$route['admin/books']           = 'bookController/index';
$route['admin/book/(:num)']     = 'bookController/comic/$1';
$route['admin/handle_book']     = 'bookController/handle_book';

$route['admin/statuses']        = 'statusController/index';
$route['admin/status/(:num)']   = 'statusController/status/$1';
$route['admin/handle_status']   = 'statusController/handle_status';

$route['admin/options']   = 'optionsController/index';
