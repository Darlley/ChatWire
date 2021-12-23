<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\{
    PageController
};
use App\Models\{
    User,
    Preference,
    Course,
    Lesson,
    Module,
    Permission
};

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

Route::get('/many-to-many', function(){

    $user = User::with('permissions')->first();
    // $permission = Permission::find(1);
    // $user->permissions()->save($permission);

    // $user->permissions()->saveMany([
    //     Permission::find(1),
    // ]);

    $user->permissions()->sync([1]);

    // $user->permissions()->attach([1,3]);

    // $user->permissions()->detach([1,3]);

    $user->refresh();

    dd($user->permissions);

    // dd(Permission::create(['name' => 'menu_03']));

});

Route::get('/one-to-one', function(){
    $user = User::find(2);
    $data = [
        'background_color' => '#000000'
    ];

    if($user->preference){

        $user->preference()->update($data);
    }else{

        // ADD NEW PREFERENCE
        $preference = new Preference($data);
        $user->preference()->save($preference);

    }

    $user->refresh();

    dd(
        User::with('preference')->find(1), 
        User::with('preference')->find(2)
    );
});

Route::get('/one-to-many', function(){
    // Course::create(['name' => 'Curso de laravel']);
    
    $course = Course::with('module.lesson')->first();

    // $course->module()->create([
    //     'name' => 'Módulo x1'
    // ]);

    var_dump($course->module);

    return '<h1>Banco de dados</h1>
    <p>Curso: '. $course->name . '</p>
    <p>Modulo: ' . $course->module[0]->name . '</p>
    <p>Aula: <a href="' . $course->module[0]->lesson[0]->video . '" target="_blank"> ' . $course->module[0]->lesson[0]->name . '</a></p>';
});


Route::get('/', [PageController::class,'welcome'])->name('welcome');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', [PageController::class,'dashboard'])->name('dashboard');
    Route::get('/chat', [PageController::class,'chat'])->name('chat');
});

