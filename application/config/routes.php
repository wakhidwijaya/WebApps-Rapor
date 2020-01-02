<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'C_Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Login
$route['login'] = 'C_Login/login';
$route['logout'] = 'C_Login/logout';

//GURU
$route['guru'] = 'guru/C_Guru/index';
$route['guru/jadwal'] = 'guru/C_Guru/jadwal';
$route['guru/rombel'] = 'guru/C_Guru/rombel';
$route['guru/rombel/ambilkelas'] = 'guru/C_Guru/ambilkelas';
$route['guru/rombel/addkd'] = 'guru/C_Guru/add_kd';
$route['guru/rombel/hapuskd/(:num)/(:num)'] = 'guru/C_Guru/delete_kd/$1/$2';
$route['guru/rombel/nilai/(:num)'] = 'guru/C_Guru/kd/$1';
$route['guru/rombel/nilai/(:num)/(:num)'] = 'guru/C_Guru/nilai/$1/$2';
$route['guru/rombel/nilai/simpan'] = 'guru/C_Guru/simpan_nilai';
$route['guru/wali'] = 'guru/C_Guru/wali';

//SISWA
$route['siswa'] = 'siswa/C_Siswa/index';
// $route['siswa/daftar'] = 'siswa/C_Siswa/siswa';
$route['siswa/nilai'] = 'siswa/C_Siswa/nilai';
$route['siswa/edit/(:num)'] = 'siswa/C_Siswa/edit/$1';
$route['siswa/edit'] = 'siswa/edit';
