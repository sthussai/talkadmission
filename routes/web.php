<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SearchUsersController;
use App\Models\Applicant;
use App\Models\Appointment;
use App\Models\Mentor;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserIsApplicant;
use App\Http\Middleware\UserIsMentor;

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

Route::resource('appointments', AppointmentController::class);
Route::resource('schedule', ScheduleController::class);
Route::resource('portfolio', PortfolioController::class);
Route::resource('messages', MessagesController::class);

Route::get('/', function () {
    $portfolios = Portfolio::all();
    return view('welcome', compact('portfolios'));
})->name('welcome');

Route::get('/mentorregister', function () {
    return view('auth.mentor-register');
});
Route::get('/applicantregister', function () {
    return view('auth.applicant-register');
});
Route::get('/users',[HomeController::class, 'users'])->name('users');

Route::get('/home', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/media', [MediaController::class, 'index'])->name('media');
Route::post('/media', [MediaController::class, 'store'])->name('storeMedia');
Route::post('/addavatar', [MediaController::class, 'update'])->name('addAvatar');
Route::post('/deletemedia', [MediaController::class, 'destroy'])->name('deleteMedia');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/inbox/{id}', [InboxController::class, 'index'])->name('inbox.id');
Route::get('/inbox/{id}/chat/{chatId}', [InboxController::class, 'show'])->name('chat.id');

/* Ajax user search controller */
Route::get('/search', [SearchUsersController::class, 'search']);

Route::get('/publicprofile', function () {
    return view('publicprofile');
})->name('publicprofile');