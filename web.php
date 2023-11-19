<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use GuzzleHttp\Psr7\Request;

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
    return view ('welcome');
});
 Route::post('/','ExampleController@show');

// Route::get('test', function () {
//     return " welcome to my first route";
// });

// Route::get('user/{name}/{age}', function ($name ,$age=0) {
//     $msg='the username is:'  .$name; 
//     if($age>0){
//         $msg .='the age is:'  .$age; 
//     }
//     return  $msg;
// })->whereIn('name',['hala','hind']);
// // (['name'=>'[a-zA-Z0-9]+','age'=>'[0-9]+'] )
// // whereAlpha('name')
// // whereNumber('age')
// Route::prefix('product')->group(function(){

//     Route::get('/', function (){
//         return 'home page';
//    });
//     Route::get('laptop', function (){
//          return 'laptop page';
//     });
//     Route::get('mobile', function (){
//         return 'mobile page';
//    });
// });
// Route::get("about", function () {
//     return " this is about Page";
// });

// Route::get("contact us", function () {
//     return "this is Contact us Page.";
// });

// Route::prefix("support")->group(function (){
//     Route::get("/", function () {
//         return "this is Support Page";
//     });

//     Route::get("chat", function () {
//         return "this is Chat Page";
//     });
    
//     Route::get("call", function () {
//         return "this is call Page.";
//     });

//     Route::get("ticket", function () {
//         return "this is ticket Page.";
//     });
// });

// Route::prefix("training")->group(function () {
//     Route::get("/", function () {
//         return "this is Training Page.";
//     });
    
//     Route::get("hr", function () {
//         return "this is HR Page.";
//     });

//     Route::get("ict", function () {
//         return "this is ict Page.";
//     });

//     Route::get("marketing", function () {
//         return "this is Marketing Page.";
//     });

//     Route::get("logistics", function () {
//         return "this is Logistics Page.";
//     });
// });
// Route::fallback(function(){
//     return redirect('/');
// }); //برجع للصفحه الرييسه لو في عنوان ملوش وجود

    // Route::get('cv', function () {
    //     return view('cv');
    // });
    // Route::get('login', function () {
    //     return view('login');
    // });
    // Route::post('receive', function () {
    //     return 'data received';
    // })->name('receive');

    // Route::get('test1',[ExampleController::class,'test1']);

    Route::get("carform",[ExampleController::class, "carform"]);

    Route::post("car",[ExampleController::class, "addcar"])->name("car");
    