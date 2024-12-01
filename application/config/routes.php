<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['bank_book'] = 'BankBookController/index'; // Menampilkan halaman form buku bank
$route['bank_book/save'] = 'BankBookController/save'; // Menyimpan data debet dan kredit ke database
$route['bank_book/list'] = 'BankBookController/list'; // Menampilkan daftar data yang sudah disimpan

$route['UangMuka/form'] = 'UangMuka/form';
$route['UangMuka/save'] = 'UangMuka/save';
$route['uang_muka/save'] = 'UangMuka/save';
$route['UangMuka/delete/(:num)'] = 'UangMuka/delete/$1';
$route['UangMuka/edit/(:num)'] = 'UangMuka/edit/$1';
$route['UangMuka/update'] = 'UangMuka/update';