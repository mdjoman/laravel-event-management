<?php

use App\Models\Massege;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
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


// font route
Route::get('/',[
    'uses'   => 'App\Http\Controllers\fontendcontroller@home',
    'as'     => '/',
  
 
 ]);
 Route::get('about',[
    'uses'   => 'App\Http\Controllers\fontendcontroller@about',
    'as'     => 'about',
  
 
 ]);
 Route::get('policy',[
    'uses'   => 'App\Http\Controllers\fontendcontroller@policy',
    'as'     => 'policy',
  
 
 ]);
 Route::get('contuct',[
    'uses'   => 'App\Http\Controllers\fontendcontroller@contuct',
    'as'     => 'contuct',
  
 
 ]);

 Route::post('massage',[
    'uses'   => 'App\Http\Controllers\massegecontroller@massage',
    'as'     => 'massage',
  
 
 ]);
 Route::get('/our-model',[
     'uses'   => 'App\Http\Controllers\fontendcontroller@model',
     'as'     => 'model'
  
  ]);
 

 Route::get('/model-details/{id}',[
 
     'uses'    =>  'App\Http\Controllers\fontendcontroller@details',
     'as'      =>   'model-details',
    
 ]);

 Route::get('/signup',[
    'uses'   => 'App\Http\Controllers\fontendcontroller@signup',
    'as'     => 'signup'
 
 ]);
 Route::get('/delete-massege/{id}', [

    'uses'   =>  'App\Http\Controllers\massegecontroller@deletemassege',
    'as'     =>  'delete-massege',
    
]);

Route::get('/show-massege/{id}', [

    'uses'   =>  'App\Http\Controllers\massegecontroller@showmassege',
    'as'     =>  'show-massege',
    
]);
 Route::get('/customar-update',[
    'uses'   => 'App\Http\Controllers\customarcontroller@customarupdate',
    'as'     => 'customar-update',
    'middleware'  => ['auth:sanctum','verified']
 ]);
 Route::get('/customar-manage',[
    'uses'   => 'App\Http\Controllers\customarcontroller@manage',
    'as'     => 'manage',
    'middleware'  => ['auth:sanctum','verified']
 ]);
 

 Route::get('/edit-customar/{id}',[

    'uses'    =>  'App\Http\Controllers\customarcontroller@edit',
    'as'      =>   'customar',
    'middleware'  => ['auth:sanctum','verified']
]);


Route::get('/delete-customar/{id}',[

    'uses'    =>  'App\Http\Controllers\customarcontroller@delete',
    'as'      =>   'customar-delete',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/model-details/{id}',[

    'uses'    =>  'App\Http\Controllers\fontendcontroller@modeldetails',
    'as'      =>   'model-details',
  
]);


 Route::post('/resister', [

    'uses'   =>  'App\Http\Controllers\customarcontroller@resister',
    'as'     =>  'resister',
    
]);
 Route::post('/coustomar-login',[
 
     'uses'    =>  'App\Http\Controllers\customarcontroller@costomarlogin',
     'as'      =>   'coustomar-login',
  
 ]);
 
 Route::post('/coustomar-logout',[
 
     'uses'    =>  'App\Http\Controllers\customarcontroller@logout',
     'as'      =>   'coustomar-logout',
  
 ]);
 Route::post('/update-customar',[
 
    'uses'    =>  'App\Http\Controllers\customarcontroller@updatecustomar',
    'as'      =>   'update-customar',
 
]);
 
 Route::post('/privacy-policy',[
 
     'uses'    =>  'App\Http\Controllers\fontendcontroller@policy',
     'as'      =>   'privacy-policy',
  
 ]);
 
 
// categories create
Route::get('/add-categories',[
   'uses'   => 'App\Http\Controllers\categorycontroller@add',
   'as'     => 'add-categories',
   'middleware' => ['auth:sanctum','verified']

]);

Route::get('/manage-categories',[
    'uses'   => 'App\Http\Controllers\categorycontroller@manage',
    'as'     => 'manage-categories',
    'middleware' => ['auth:sanctum','verified']
 
 ]);

 
Route::get('/edit-category/{id}',[

    'uses'    =>  'App\Http\Controllers\categorycontroller@edit',
    'as'      =>   'edit-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/delete-category/{id}',[

    'uses'    =>  'App\Http\Controllers\categorycontroller@delete',
    'as'      =>   'delete-category',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/cerate-categories',[

    'uses'    =>  'App\Http\Controllers\categorycontroller@create',
    'as'      =>   'cerate-categories',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::post('/update-category',[

    'uses'    =>  'App\Http\Controllers\categorycontroller@update',
    'as'      =>   'update-category',
    'middleware'  => ['auth:sanctum','verified']
]);


// model create

Route::get('/add-model',[
    'uses'   => 'App\Http\Controllers\modelcontroller@add',
    'as'     => 'add-model',
    'middleware' => ['auth:sanctum','verified']
 
 ]);
 
 Route::get('/manage-models',[
     'uses'   => 'App\Http\Controllers\modelcontroller@manage',
     'as'     => 'manage-models',
     'middleware' => ['auth:sanctum','verified']
  
  ]);
 
  
 Route::get('/edit-model/{id}',[
 
     'uses'    =>  'App\Http\Controllers\modelcontroller@edit',
     'as'      =>   'edit-model',
     'middleware'  => ['auth:sanctum','verified']
 ]);
 
 Route::get('/delete-model/{id}',[
 
     'uses'    =>  'App\Http\Controllers\modelcontroller@delete',
     'as'      =>   'delete-model',
     'middleware'  => ['auth:sanctum','verified']
 ]);
 
 Route::post('/cerate-model',[
 
     'uses'    =>  'App\Http\Controllers\modelcontroller@create',
     'as'      =>   'cerate-model',
     'middleware'  => ['auth:sanctum','verified']
 ]);
 
 Route::post('/update-model',[
 
     'uses'    =>  'App\Http\Controllers\modelcontroller@update',
     'as'      =>   'update-model',
     'middleware'  => ['auth:sanctum','verified']
 ]);
 Route::get('/view-model/{id}',[
 
    'uses'    =>  'App\Http\Controllers\modelcontroller@view',
    'as'      =>   'view-model',
    'middleware'  => ['auth:sanctum','verified']
]);

Route::get('/site-seating',[
    'uses'   => 'App\Http\Controllers\seatingcontroller@siteseating',
    'as'     => 'site-seating',
    'middleware'  => ['auth:sanctum','verified']
 ]);
 Route::post('/seating',[
    'uses'   => 'App\Http\Controllers\seatingcontroller@sitesettingup',
    'as'     => 'seating',
    'middleware'  => ['auth:sanctum','verified']
 ]);
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('Admin.index',[
        'User'    => User::first(),
        'customarmassege' => Massege::get(),
    ]);
})->name('dashboard');

//Reoptimized class loader:
//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:

Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});