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


Route::get('/', function () {
     //$name = "mhamad";
    // if (isset($_GET['name'])){
     //    $name = $_GET['name'];
    // }
   // $tasks = ['mhamad 1', 'mhamad 2' , 'mhamad 3' ,'mhamad 4'];


    $tasks = DB::select('select * from tasks');

    return view('index',compact('tasks'));
});

Route::post('delete/{id}', function ($id) {
    DB::delete(
        'delete from tasks where id = ?', [$id])
        ;

    return redirect()->back();
});
Route::post('insert', function () {

    DB::table('tasks')->insert([
        name => $_POST['name'],
        created_at => now(),
        updated_at => now()

    ]

    );

    return redirect()->back();
});
