<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('tasks', function () {
     //$name = "mhamad";
    // if (isset($_GET['name'])){
     //    $name = $_GET['name'];
    // }
   // $tasks = ['mhamad 1', 'mhamad 2' , 'mhamad 3' ,'mhamad 4'];


    $tasks = DB::select('select * from tasks');


    return view('taks',compact('tasks'));
});
