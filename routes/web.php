<?php

use App\Http\Controllers\DataBaseController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/new', function () 
//         {
//             return view('new');
//     });

// Route::get('/new/{name}', function($name) {
//     echo $name;
//     // now e passing name directly to the blade page 
//     return view('dynamic' ,[ 'name' => $name ]);
// });
// // here we lern the rredirecting to any url 
// Route::redirect('/home', '/');



// // so here im gona write the routes for the user controller
// Route::get('/', [UserController::class ,'getUser'])->name('getUser');

// Route::get('/new', [UserController::class ,'aboutUser2'])->name('aboutUser2');

// Route::get('/new/{name}', [UserController::class ,'getUserName'])->name('getUserName');  

// Route::get('/view/{name}', [UserController::class ,'view'])->name('view');

// // now i am gona study the view afther the controler basics


// // if we want to show the view pages directly then 
// Route::view('/view/{name}', 'view');

// Route::view('/new/{name}', 'new');

// Route::view('/new', 'new');


// making rout for ppassssing array to the view using controller 
Route::get('/view',[UserController::class ,'passingarray'])->name('passingarray');



// there i gona practice the forms in laravel 
// now i have to creaate the controller funtion to the route 
Route::view('/loginpage', 'loginpage');
// this is he data route for passing data from login page to the controller 
Route::post("adduser" , [UserController::class, 'formdata'])->name('geting.data.from.loginpage');

// there we learn the grouping routs 
// prefix group routes 

Route::prefix('student')->group(function(){
    Route::get('/show' , [UserController::class, 'show'])->name('show');
    Route::get('/all' , [UserController::class, 'all'])->name('all');

});



Route::view('/login1', 'login');
Route::post('adduser1' , [LoginController::class, 'loginSesion'] )->name('login.put');
Route::get('logout' , [LoginController::class, 'logout'] )->name('logout');


Route::view('data1', 'add_data');
Route::post('/data' , [DataBaseController::class, 'adddata'] );
