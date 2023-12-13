<?php

use App\Http\Controllers\ProfileController;
use App\Models\Sticky;
use App\Models\Upcoming_task;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Carbon\Carbon;


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
    return view('welcome');
});


Route::get('/upcoming', function(){
    $today= Carbon::now()->format ('Y-m-d');
    $tomorrow= Carbon::now()->addDays(1)->format('Y-m-d');
    $day_after_tomorrow=Carbon::now()->addDays(2)->format('Y-m-d');
    $endOfWeek = Carbon::now()->endOfWeek()->format('Y-m-d');

    return view('upcoming', [
        'upcoming_tasks' => Upcoming_task::where('urgency', 'high')->get(),
        'tomorrow_tasks'=> Upcoming_task::where('urgency', 'medium ')->get(),
        'thisweek_tasks'=>Upcoming_task::where('urgency', 'low')->get(),
    ]);
})->name('upcoming');


Route::get('/today', function(){
    return view('today');
})->name('today');

Route::get('/lists', function(){
    return view('lists');
})->name('lists');

// ONLY COLLECT THOSE RELATED TO A SPECIFIC USER-> ALSO USE CONTROLLERS
Route::get('stickywall', function(){
    return view('stickywall', [
        'stick' => Sticky::all()
    ]);
})->name('stickywall');


Route::get('/add-task', function(){
    return view('add-task');
})->name('add-task');


