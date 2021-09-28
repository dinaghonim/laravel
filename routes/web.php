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



// Route::get('Message',function (){
//       echo 'Laravel Routes';
// });



// // Route::get('Register',function (){
// //    return view('create');
// // });


// Route::view('Register','create');


// Route::post('doRegister',function (){
//     echo 'Form Data sended';
// });




// Route::get('Student/{name}/{id?}',function ($stdName,$id = null){
//        echo 'Student data  :'.$id.' Name '.$stdName;
// })->where('name','[a-zA-Z]+');





// Route::get('Articale/{id}',function ($id){
//     echo 'Articale data  :'.$id;
// });  // ->where('id','[0-9]+')->where('name','[a-zA-Z]+');



# Controller Route .... 
Route::get('Message','studentController@Message');
Route::get('Register','studentController@createView');
Route::get('store','studentController@store');
Route::get('Profile','studentController@StudentProfile');


// Route::post('doRegister',function (){
//     echo 'Form Data sended';
// });







// get  
// post 
// put 
// patch 
// delete 
// option 
// match 
// any 
// resource .. 
