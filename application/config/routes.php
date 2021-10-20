<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'RegistrationController';
$route['registration/store'] = 'RegistrationController/store';
$route['district'] = 'RegistrationController/get_district';
$route['upazila'] = 'RegistrationController/get_upazila';
$route['login'] = 'backend/Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


