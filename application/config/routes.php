<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'c_login';

$route['login'] = 'c_login/periksa_login';
$route['logout'] = 'c_login/logout';

$route['home'] = 'c_home';
$route['kustomer'] = 'c_kustomer';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;