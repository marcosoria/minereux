<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


$route['admin'] = 'admin/home';
$route['admin/home/do_login'] = 'admin/home/do_login';
$route['admin/home/logout'] = 'admin/home/logout';

//$route['directorio'] = 'directorio';
//$route['directorio/create'] = 'directorio/create';
//$route['directorio/(:any)'] = 'directorio/view/$1';

$route['admin/pages'] 				= 'admin/pages/index';
$route['admin/pages/index'] 		= 'admin/pages/index';
$route['admin/pages/edit'] 			= 'admin/pages/edit';
$route['admin/pages/edit/(:any)'] 	= 'admin/pages/edit/$1';
$route['admin/pages/delete/(:any)'] = 'admin/pages/delete/$1';
$route['admin/pages/create'] 		= 'admin/pages/create';

$route['admin/users'] 				= 'admin/users/index';
$route['admin/users/index'] 		= 'admin/users/index';
$route['admin/users/create'] 		= 'admin/users/create';
$route['admin/users/delete/(:any)'] = 'admin/users/delete/$1';
$route['admin/users/edit'] 			= 'admin/users/edit';
$route['admin/users/edit/(:any)'] 	= 'admin/users/edit/$1';

$route['admin/news'] 				= 'admin/news/index';
$route['admin/news/index'] 			= 'admin/news/index';
$route['admin/news/create'] 		= 'admin/news/create';
$route['admin/news/delete/(:any)'] 	= 'admin/news/delete/$1';
$route['admin/news/edit'] 			= 'admin/news/edit';
$route['admin/news/edit/(:any)'] 	= 'admin/news/edit/$1';

//$route['nosotros'] 	= 'page/about';


//$route['(:any)'] = 'pages/view/$1';

$route['default_controller'] = "english";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */