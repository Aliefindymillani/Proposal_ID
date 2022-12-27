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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'signupuser';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// user
$route['home'] = 'home';
$route['sign-up'] = 'signupuser';
$route['sign-up/process'] = 'signupuser/process';
$route['home/form-proposal'] = 'home/tambah';
$route['home/proses-proposal'] = 'home/prosesuploadform';

$route['home/status-proposal'] = 'home/status';
$route['home/jadwal-kegiatan'] = 'home/jadwal';

//admin
$route['admin/signup'] = 'signup';
$route['admin/signup/process'] = 'signup/process';
$route['admin/home'] = 'Dashboard';
$route['admin/kegiatan-diterima'] = 'Dashboard/kegiatanditerima';
$route['admin/kegiatan-ditolak'] = 'Dashboard/kegiatanditolak';
$route['admin/kegiatan-masuk'] = 'Dashboard/kegiatanmasuk';
$route['admin/list-user'] = 'Dashboard/listuser';
$route['admin/list-user/(:any)'] = 'Dashboard/listuser/$1';
$route['admin/tambah-user'] = 'Dashboard/tambahuser';
$route['admin/form-proposal'] = 'Dashboard/formproposal';
$route['admin/proses-proposal'] = 'Dashboard/prosesuploadform';
$route['admin/tolak-status/(:num)'] = 'Dashboard/tolakstatus/$1';
$route['admin/terima-status/(:num)'] = 'Dashboard/terimastatus/$1';
$route['admin/search_keyword'] = 'Dashboard/search_keyword';
$route['admin/update'] = 'Dashboard/update';
$route['admin/update/(:any)'] = 'Dashboard/update/$1';
$route['admin/delete/(:any)'] = 'Dashboard/delete/$1';

//auth
$route['logout'] = 'login/logout';
