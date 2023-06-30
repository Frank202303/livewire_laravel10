<!-- http://127.0.0.1:8000/students -->
<?php

use App\Http\Livewire\Crud\IndexComponent;
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
    return view('home');
});
// 分配路由
//IndexComponent::class 指定了处理该路由的组件

//->name('students') 给该路由指定了一个名称 'students'。
//这个名称可以在其他地方使用，例如生成路由链接或重定向时，可以使用该名称而不是硬编码的 URL。

Route::get('students',  IndexComponent::class)->name('students');
