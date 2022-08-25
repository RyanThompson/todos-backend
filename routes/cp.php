<?php

use Illuminate\Support\Facades\Route;
use Streams\Core\Support\Facades\Messages;
use Streams\Core\Support\Facades\Streams;

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

Route::get('todos/{id}/toggle', function ($id) {
    
    $todo = Streams::repository('todos')->find($id);

    $todo->complete = !$todo->complete;

    $todo->save();

    Messages::success('Todo toggled.');

    return redirect()->back();
});
