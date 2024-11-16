<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['notulen'] = 'notulen/index';
$route['notulen/create'] = 'notulen/create';
$route['notulen/store'] = 'notulen/store';
$route['notulen/edit/(:num)'] = 'notulen/edit/$1';
$route['notulen/update/(:num)'] = 'notulen/update/$1';
$route['notulen/delete/(:num)'] = 'notulen/delete/$1';
