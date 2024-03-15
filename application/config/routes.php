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
$route['default_controller'] = 'Home';
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;



//admin


$route['admin/Create-User'] = 'admin/user/create';
$route['admin/User-Privilages'] = 'admin/user/index';
$route['admin/Edit-User/(:any)'] = 'admin/user/edit/$1';
$route['admin/Delete-User/(:any)'] = 'admin/user/delete/$1';

$route['admin/Test-Types'] = 'admin/Test_type/index';
$route['admin/Create-Test-Type'] = 'admin/Test_type/create';
$route['admin/Edit-Test-Types/(:any)'] = 'admin/Test_type/edit/$1';

$route['admin/Rooms'] = 'admin/Rooms/index';
$route['admin/Create-Room'] = 'admin/Rooms/create';
$route['admin/Edit-Room/(:any)'] = 'admin/Rooms/edit/$1';
$route['admin/Delete-Room/(:any)'] = 'admin/Rooms/delete/$1';

// home
$route['pre-search'] = 'vehicle/per_search';
$route['Search'] = 'vehicle/search';
$route['blog'] = 'blog';
$route['About-Us'] = 'home/about';
$route['Contact-Us'] = 'home/contact';
$route['faq'] = 'home/faq';
$route['Thank-You/(:any)'] = 'home/thank_you/$1';
$route['Payment-Fail'] = 'home/payment_fial';
$route['Invoice'] = 'home/invoice';
$route['Round-Trip'] = 'home/round_trip_packages';
$route['Round-Trip-Search'] = 'vehicle/round_trip_search';
$route['Day-Packages'] = 'home/day_packages';
$route['Round-Trip-Custom'] = 'vehicle/round_custom';

$route['Products'] = 'home/products';
$route['Product-Details/(:any)/(:any)'] = 'home/product_details/$1/$2';
$route['Services'] = 'home/services';
$route['Service-Details/(:any)/(:any)'] = 'home/service_details/$1/$2';
// $route['Product-Details/(:any)/(:any)'] = 'home/product_details/$1/$2';
$route['Brands'] = 'home/brands';
$route['News-And-Events'] = 'home/news_and_events';
$route['News-And-Events/(:any)/(:any)'] = 'home/news_and_events_details/$1/$2';