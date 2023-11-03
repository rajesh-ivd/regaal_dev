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

$route['default_controller'] = 'front';
$route['admin'] = 'admin';
// $route['admin/home'] = 'admin/home';

// $route['admin/applicant_management'] = 'admin/applicant_management';

// $route['admin/team_management'] = 'admin/team_management';

// $route['admin/event_management'] = 'admin/event_management';

// $route['admin/gallery_management'] = 'admin/gallery_management';

// $route['admin/leaderboard_management'] = 'admin/leaderboard_management';

// $route['admin/banner_management'] = 'admin/banner_management';

// $route['admin/blog'] = 'admin/blog';

// $route['admin/bulk'] = 'admin/bulk';

// $route['admin/participant_management'] = 'admin/applicant_management';

// $route['admin/applicant_submit'] = 'admin/applicant_submit';



$route['front'] = 'front';
$route['about'] = 'front/about';
$route['culture'] = 'front/culture';
$route['achievements'] = 'front/achievements';
$route['leadership'] = 'front/leadership';
$route['products'] = 'front/products';
$route['products/(:any)'] = 'front/products/$1';
$route['gallery'] = 'front/gallery';
$route['gallery/(:any)'] = 'front/gallery/$1';
$route['gallery/(:any)/(:any)'] = 'front/gallery/$1/$1';
$route['csr'] = 'front/csr';
$route['csr/(:any)'] = 'front/csr/$1';
$route['careers'] = 'front/careers';
$route['contact'] = 'front/contact';

$route['future_products'] = 'front/future_products';



//$route['404_override'] = 'front/home/page_not_found';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;









// $route['admin/product_edit_type_size_data'] = 'admin/product_edit_type_size_data';

