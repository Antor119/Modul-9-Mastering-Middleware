<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidController;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\RedirectMiddleware;
use App\Http\Middleware\TestMiddleware;


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

Route::get("/index/{num1}/{num2}", [DemoController::class,"index"]);
Route::get("/sessionPut/{email}", [SessionController::class,"sessionPut"]);
Route::get("/sessionPull", [SessionController::class,"sessionPull"]);
Route::get("/sessionForgate", [SessionController::class,"sessionForgate"]);
Route::get("/sessionFlush", [SessionController::class,"sessionFlush"]);
Route::get("/sessionGet", [SessionController::class,"sessionGet"]);

//Middleware
/*
Route::get("/hello1/{key}", [MidController::class,"mid1"])->middleware([DemoMiddleware::class]);
Route::get("/hello2/{key}", [MidController::class,"mid2"])->middleware([DemoMiddleware::class]);
Route::get("/hello3/{key}", [MidController::class,"mid3"])->middleware([DemoMiddleware::class]);
Route::get("/hello4/{key}", [MidController::class,"mid4"])->middleware([DemoMiddleware::class]);
// Route::get("/hello1", [MidController::class,"mid1"]);
//
*/
/*
Route::middleware(['demo'::class])->group(function () {
Route::get("/hello1/{key}", [MidController::class,"mid1"]);
Route::get("/hello2/{key}", [MidController::class,"mid2"]);
Route::get("/hello3/{key}", [MidController::class,"mid3"]);
Route::get("/hello4/{key}", [MidController::class,"mid4"]);

});
*/
//Apply For Whole Application

Route::get("/hello1/{key}", [MidController::class,"mid1"]);
Route::get("/hello2/{key}", [MidController::class,"mid2"]);
Route::get("/hello3/{key}", [MidController::class,"mid3"]);
Route::get("/hello4/{key}", [MidController::class,"mid4"]);

Route::get('/', function () {
    return view('welcome');
});

// Manipulate Request Header
Route::get('/hello5', [MidController::class,'index1'])->middleware([DemoMiddleware::class]);
// Rate Limiting
//Route::get('/hello6', [MidController::class,'mid6'])->middleware('throttle: 6,1');
Route::get('/hello6', [MidController::class,'mid6']);
//single action controller

Route::get('/single', SingleActionController::class);
//Resource
Route::resource('photo', ResourceController::class);

/*
Get()  Index     http://127.0.0.1:8000/photo
Get()  Create    http://127.0.0.1:8000/photo/create
post()  Store    http://127.0.0.1:8000/photo
Get()  Show      http://127.0.0.1:8000/photo/{photo}
Get()  Edit      http://127.0.0.1:8000/photo/{photo}/edit
Delete()  Delete      http://127.0.0.1:8000/photo/{photo}
put()/Patch()  Update      http://127.0.0.1:8000/photo/{photo}

*/
//Constructors
 Route::get('/index1', [DemoController::class,'index1'])->middleware([DemoMiddleware::class]);

 //Pass Data From Controller

Route::get('/home', [HomeController::class,'pages']);

Route::get('/home1', [HomeController::class, 'home']);
Route::get('/home2', [HomeController::class, 'home2']);


//Live class Modul-9
// Route::get('/mid5', [HomeController::class,'mid5'])->middleware('redirect');
// Route::get('/mid6', [HomeController::class,'mid6'])->middleware('redirect');

//middleware Group

Route::middleware(['redirect', 'response'])->group(function () {
    Route::get('/mid5', [HomeController::class,'mid5']);
    Route::get('/mid6', [HomeController::class,'mid6']);

});

Route::get('mid7', [HomeController::class,'mid7'])->middleware('addtitle');
Route::get('/mid8', [HomeController::class,'protectedResponse'])->middleware('blocked');

//middleware
// Route::get('/index', [TestController::class,'index'])->middleware('test');

// Route::group(['middleware'=> 'test'], function () {
//     Route::get('/index', [TestController::class,'index']);
//     Route::get('/show', [TestController::class,'show']);

// });
// Route::get('/index', [TestController::class,'index']);
// Route::get('/store', [TestController::class,'store']);
// Route::get('/show', [TestController::class,'show']);

//Reqest verification Via middleware
Route::get('/index', [TestController::class,'index'])->middleware('test');
Route::get('/show', [TestController::class,'show']);
Route::get('/store', [TestController::class,'store'])->middleware('test');

