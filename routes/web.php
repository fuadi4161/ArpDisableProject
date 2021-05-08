<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/arp', 'ARP\ArpController@getAll');
Route::get('/arp/{id}', 'ARP\ArpController@detail');
Route::get('/arp/disable/{id}', 'ARP\ArpController@disable');
Route::get('/arp/enable/{id}', 'ARP\ArpController@enable');
