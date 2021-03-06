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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
/*******************Customer Route***************************/
//$route['customer/create'] = 'customerController/create';
$route['customer/create'] = 'CustomerController/create';
$route['customer'] = 'CustomerController/index';
$route['customer/testedit/(:num)'] = 'CustomerController/testedit/$1';
$route['customer/edit/(:num)'] = 'CustomerController/edit/$1';
$route['customer/delete/(:num)'] = 'CustomerController/delete/$1';
/*******************Customer Route***************************/
/*******************Prospect Route***************************/
$route['customer/search'] = 'CustomerController/search';
$route['customer/payment'] = 'CustomerController/payment_pending';
$route['customer/pending'] = 'CustomerController/pending_case';
$route['customer/searchData'] = 'CustomerController/searchData';
$route['customer/upload'] = 'CustomerController/upload';
$route['customer/finishstep/(:num)'] = 'CustomerController/finishstep/$1';

/*******************Prospect Route***************************/
/*******************Report Route***************************/
$route['report'] = 'ReportController/index';
$route['report/pendingdata'] = 'ReportController/pendingDataReport';
$route['report/pendingdataview'] = 'ReportController/pendingview';
$route['report/statuswise'] = 'ReportController/statusWiseData';
$route['report/statuswisereport'] = 'ReportController/statusWiseDataReport';
$route['report/datewisedata'] = 'ReportController/dateWiseData';
$route['report/datewisedatareport'] = 'ReportController/dateWiseDataReport';
$route['report/paymentwisedata'] = 'ReportController/paymentWiseData';
$route['report/paymentDateWiseDataReport'] = 'ReportController/paymentDateWiseDataReport';

/*******************Report Route***************************/
